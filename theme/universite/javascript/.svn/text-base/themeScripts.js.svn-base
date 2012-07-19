function init() {	

	// apply the YUI3 tabview widget
	//test for tabs first
	YUI().use('node', function(Y){
		
	// logo fade in
		YUI().use('anim', function(Y) {
			
			var logoAnim = new Y.Anim({
					node: '#logo',
					to: {
						opacity: 1
					}
			});
			
			logoAnim.run();
		});
	
	// apply JQuery css theme to various moodle elements
	
	//block formatting
		Y.all('div.block div.header').addClass('ui-state-default ui-corner-top');
		Y.all('div.block').addClass('ui-widget-content ui-corner-all');
				
	//important blocks
	//	Y.all('div.block_news_items div.header').addClass('ui-state-hover ui-corner-top');
	//	Y.all('div.block_activity_modules div.header').addClass('ui-state-hover ui-corner-top');
	//	Y.all('div.block_course_list div.header').addClass('ui-state-hover ui-corner-top');
	//	Y.all('div.block_login div.header').addClass('ui-state-hover ui-corner-top');

	//special blocks	
		Y.all('div.block_course_summary').addClass('ui-state-highlight ui-corner-all');
		Y.all('div.block_login').addClass('ui-state-highlight ui-corner-all');
	
	//tabs	
		Y.all('.tabtree a').addClass('ui-state-highlight ui-corner-top');
		Y.all('.tabtree a.nolink').addClass('ui-widget-header ui-corner-top');
		Y.all('.tabtree a.nolink').removeClass('ui-state-highlight');
	
	//boxes formatting
		Y.all('div.generalbox, div.coursebox').addClass('ui-widget-content ui-corner-all');
		Y.all('div.block_recent_activity h3.main').addClass('ui-state-highlight ui-corner-all');
		Y.all('div.coursebox div.info h3').addClass('ui-widget-header ui-corner-all')
		
	//content formatting	
		Y.all('#contentCol').addClass('ui-widget-content ui-corner-all');
		Y.all('h3.weekdates').addClass('ui-widget-header ui-corner-all');
		Y.all('h3.sectionname').addClass('ui-widget-header ui-corner-all');
		Y.all('h2.headingblock').addClass('ui-corner-all');
		Y.all('body#page-login-index div#contentCol').addClass('ui-state-highlight ui-corner-all');
		Y.all('li.section').addClass('ui-widget-content ui-corner-all');
		Y.all('li#section-0').addClass('ui-widget-header');	
		Y.all('.adminwarning').addClass('ui-state-error ui-corner-all');
		Y.all('.buttons li a').addClass('ui-state-hover ui-corner-all');
		Y.all('.progress_bar_completed').addClass('ui-state-active');
		Y.all('.progress_bar_table').addClass('ui-widget-content');

	//special pages - reports area
		Y.all('div#report-main-content div.region-content').addClass('ui-widget-content ui-corner-all');	
		Y.all('body.pagelayout-report div.navbar').addClass('ui-widget-header');	

	//events			
		Y.all('table.event').addClass('ui-widget-content ui-corner-all');

	//quiz pages
		Y.all('div.que').addClass('ui-widget-content ui-corner-all');
		Y.all('a.qnbutton').addClass('ui-state-hover ui-corner-all');

	//forums formatting
		Y.all('div.forumpost div.header').addClass('ui-widget-header ui-corner-top');
		Y.all('div.forumpost div.content').addClass('ui-widget-content ui-corner-bottom');
		Y.all('div.indent div.header').addClass('ui-state-highlight');
		Y.all('table.forumheaderlist').addClass('ui-widget-content');
		Y.all('table.forumheaderlist th').addClass('ui-widget-header');
		Y.all('table.forumheaderlist td').addClass('ui-widget-content');			
		
	//blogs formatting			
		Y.all('table.blog_entry').addClass('ui-widget-content ui-corner-all');
		Y.all('table.blog_entry tbody').addClass('ui-widget-content ui-corner-bottom');
		Y.all('table.blog_entry thead').addClass('ui-widget-header ui-corner-top');

	//tables
		Y.all('table.list').addClass('ui-widget-content');
		Y.all('table.rolecap').addClass('ui-widget-content');
		Y.all('table.list td.label').addClass('ui-widget-header');
		Y.all('table.list td.info').addClass('ui-widget-content');
		Y.all('table.generaltable').addClass('ui-widget-content');
		Y.all('table.generaltable td.header').addClass('ui-widget-header');
		Y.all('table.generaltable th').addClass('ui-widget-header');
		Y.all('table.generaltable td').addClass('ui-widget-content');
	
	//forms
		Y.all('fieldset').addClass('ui-widget-content ui-corner-all');

	//calendars
		Y.all('.calendartable').addClass('ui-datepicker-calendar');	
		Y.all('td.dayblank').addClass('ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled');	
		Y.all('td.today').addClass('ui-datepicker-current-day ui-state-active');
        Y.all('table.calendarmonth td.today').removeClass('ui-state-active').addClass('ui-state-highlight');	
		Y.all('td.day').addClass('ui-state-default');	
		Y.all('div.calendar-controls').addClass('ui-datepicker-header ui-widget-header ui-corner-all');	
		Y.all('div.minicalendarblock h3').addClass('ui-datepicker-header ui-widget-header ui-corner-all');	

		
	});	

} 
 
function skinTheDockPanels(){
	YUI().use('node', function(Y) {
		Y.all('div.dockeditempanel_hd').addClass('ui-state-default');
		Y.all('div.dockeditempanel_bd').addClass('ui-widget-content');
	});
	
}

function skinTheDock(){
	YUI().use('node', function(Y) {
		Y.all('#dock').addClass('ui-widget-content');
	});
	
}

function mobileChange (){
	
	YUI().use('node',function(Y){		

		if ( Y.one('body.mobileView') ) {
		
		//mobile view
			var regionPre = Y.one('#region-pre');
			var regionPost = Y.one('#region-post');
			var regionMain = Y.one('#region-main');
			var regionParent = Y.one('#page-content');
			
			regionParent.prepend(regionPre);
			regionParent.prepend(regionMain);
		}
	});
}

YUI().use('*', function(Y) {
	Y.on("domready", init, Y);
	Y.on("available", skinTheDock, "div#dock", Y);
	Y.on("contentready", mobileChange, "div#region-main", Y);
	Y.on("available", skinTheDockPanels, "div.dockeditempanel_bd", Y);
});
	
