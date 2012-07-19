<?php //$Id: block_unanswered_discussions.php,v 1.4 2011/02/22 02:20:55 deraadt Exp $
      // Modified by Michael de Raadt from 2010072000

class block_unanswered_discussions extends block_base {

    // Default Configuration
    var $defaultLimits = array(
        'randomposts' => 0, // Random Unanswered Posts
        'oldestposts' => 2, // Oldest Unanswered Posts
        'yourposts'   => 2  // Your Unanswered Posts
    );
    var $maxSubjectLength = 20; // characters
    var $maxShowOption = 10; // messages
    var $queryLimit = 50; // messages
    
    //--------------------------------------------------------------------------
    function init() {
        $this->title = get_string('unanswereddiscussions', 'block_unanswered_discussions');
    }

    //--------------------------------------------------------------------------
    function applicable_formats() {
        return array('course-view' => true);
    }
    
    //--------------------------------------------------------------------------
    function instance_allow_multiple() {
        return true;
    }

    //--------------------------------------------------------------------------
    function has_config() {
        return false;
    }

    //--------------------------------------------------------------------------
    function specialization() {
        global $COURSE, $DB;

        // Create the config object
        if (!isset($this->config)) {
            $this->config = new stdClass;
        }

        // Set up the default config values
        foreach($this->defaultLimits as $name => $value) {
            if (!isset($this->config->{$name})) {
                $this->config->{$name} = $value;
            }
        }

        // Excluded News forums by default
        if(!isset($this->config->exclude)) {
            $this->config->exclude = array();
            if($newsForums = $DB->get_records_select('forum',"course=\"$COURSE->id\" AND type=\"news\"")) {
                foreach($newsForums as $key => $forum) {
                    $this->config->exclude[] = $forum->id;
                }
            }
        }
    }

    //--------------------------------------------------------------------------
    function get_data($course = 0) {
        global $CFG, $USER, $DB;

        // If we've already done it, return the results
        if (!empty($this->discussions)) {
            return $this->discussions;
        }
        $this->discussions = array();

        // Which course are we grabbing data for? Make sure it's an integer.
        $course = intval($course);

        // Exclude specified forums
        $where_fora_exclude_sql = (!empty($this->config->exclude) ? ' AND d.forum NOT IN(' . join($this->config->exclude, ',') . ') ' : '');
        $this->config->limits = array (
            $this->config->randomposts,
            $this->config->oldestposts,
            $this->config->yourposts
        );

        // These are the different bits in the three queries
        $queries = array(
            'where'  => array("AND d.userid <> {$USER->id} ", "AND d.userid <> {$USER->id} ", "AND d.userid = {$USER->id} "),
            'order'  => array('', 'd.timemodified ASC,', 'd.timemodified ASC,'),
        );

        /// Do it backwards and exclude previous results

        // This array holds already presented discussion ids to exclude for the next query (stops duplication)
        $discussion_exclude = array();
        
        // Run the three queries
        for ($i = 2; $i >= 0; $i--) {
        
            // No point doing the query if it's not enabled
            if (!$this->config->limits[$i]>0)
                continue;

            // If we've got excluded discussions build up the sql to exclude them
            $where_post_exclude_sql = (!empty($discussion_exclude) ? 'AND d.id NOT IN(' . join($discussion_exclude, ',') . ')' : '');

            // Building up the SQL statement from the bits and pieces above
            $sql = "SELECT d.id, d.name, d.timemodified, d.groupid, (COUNT(p.id) - 1) AS replies
                    FROM {forum_posts} p, {forum_discussions} d 
                    WHERE d.course = $course
                          $where_fora_exclude_sql
                          $where_post_exclude_sql
                          AND d.id = p.discussion 
                          {$queries['where'][$i]}
                    GROUP BY d.id, d.name, d.timemodified, d.groupid
                    HAVING COUNT(p.id) = 1 
                    ORDER BY {$queries['order'][$i]}replies ASC";
            $this->discussions[$i] = $DB->get_records_sql($sql, null, 0, $this->queryLimit); // Need to limit after query to achieve random shuffle

            // If it didn't get any results it doesn't need any processing
            if (empty($this->discussions[$i])) {
                unset($this->discussions[$i]);
                continue;
            }
            
            // For random posts, shuffle
            if($i == 0) {
                shuffle($this->discussions[$i]);
            }
            
            // Reduce the number of posts down to the required level
            $this->discussions[$i] = array_slice($this->discussions[$i], 0, $this->config->limits[$i], true);

            // Add each discussion to the exclusion list
            reset($this->discussions[$i]);
            foreach($this->discussions[$i] as $discussion) {
                $discussion_exclude[] = $discussion->id;
            }
        }

        return $this->discussions;
    }

    //--------------------------------------------------------------------------
    function get_content() {
        global $COURSE, $CFG, $USER, $DB;

        // Don't do it more than once
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        if (empty($this->instance)) {
            return $this->content;
        }

        require_once($CFG->dirroot.'/mod/forum/lib.php');   // We'll need this

        // Do the data retreival. If we don't get anything, show a pretty message instead and return.
        $discussions = $this->get_data($COURSE->id);
        if (empty($discussions)) {
            $this->content->text .= '<div class="block_unanswered_discussions_message">('.get_string('nounanswereddiscussions', 'block_unanswered_discussions').')</div>';
            return $this->content;
        }

        // Actually create the listing now
        $strftimedatetime = get_string('strftimedatetime');
        $strtitle = array(
            get_string('randomposts', 'block_unanswered_discussions'),
            get_string('oldestposts', 'block_unanswered_discussions'),
            get_string('yourposts', 'block_unanswered_discussions')
        );

        // Make sure our sections are in order
        ksort($this->discussions);
        reset($this->discussions);

        // Output each section
        foreach ($this->discussions as $key => $set) {
        
            // If this section's not enabled, or empty, skip it
            if (!$this->config->limits[$key] || empty($set))
                continue;

            // Add the title for this section
            $this->content->text .= '<div class="block_unanswered_discussions_heading">'.$strtitle[$key].'</div>';

            // Make sure we get them all by resetting the array pointer
            reset($set);       

            // Print each discussion
            foreach ($set as $discussion) {
                $discussion->subject = $discussion->name;
                $discussion->subject = format_string($discussion->subject, true, $COURSE->id);
                if(strlen($discussion->subject) > $this->maxSubjectLength) {
                    $discussion->subject = substr($discussion->subject,0,$this->maxSubjectLength).'...';
                }

                $this->content->text
                    .= '<div class="block_unanswered_discussions_item">'
                    .  '<span class="block_unanswered_discussions_message"><a href="'.$CFG->wwwroot.'/mod/forum/discuss.php?d='.$discussion->id.'"></span>'
                    .  $discussion->subject
                    .  '</a><br />'
                    .  '<span class="block_unanswered_discussions_date">'.userdate($discussion->timemodified, $strftimedatetime).'</span>'
                    .  '</div>';
            }

        }

        return $this->content;
    }
}