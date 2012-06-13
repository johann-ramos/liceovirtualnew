<?php
/*
 * fix admin role if you've locked yourself out.
 * Resets the admin role, discovers the primary
 * admin and resets its password (just in case) 
 *
 * Instructions:
 * Load to the root of your Moodle directory and run from
 * a browser.
 *
 * WARNING: DO NOT USE THIS SCRIPT LIGHTLY, IT SIGNIFICANTLY
 * MODIFIES YOUR MOODLE ROLES AND SETTINGS. USE AS A
 * LAST RESORT ONLY.
 *
 * You MUST remove this script after using it.
 * It's the biggest security hole known to man.
 *
 * Howard Miller - E-Learn Design Ltd.
 * howard@e-learndesign.co.uk
 *
 * Modified by Jack Briner, ecpi College of Technology 
 * to ensure login is reset on first login
 */
 
require_once( 'config.php' );
require_once( 'lib/adminlib.php' );

print_header('Admin Role Repair Script','Admin role repair script');

echo "<p>Repairing administrator role. Note the following steps:";
echo "<ul>\n";

// reset the capabilities of admin role
echo "<li>Resetting admin role to default</li>\n";
if ($adminrole = get_record('role','shortname','admin')) {
    $adminroleid = $adminrole->id;
}
else {
    // not as good, but should normally be correct
    $adminroleid = 1;
}
reset_role_capabilities( $adminroleid ); 

// reload context
echo "<li>Reloading context</li>\n";
$sitecontext = get_context_instance( CONTEXT_SYSTEM );
mark_context_dirty( $sitecontext->path );

// find the primary admin
$admin = get_admin();
$adminusername = $admin->username;
echo "<li>Primary admin username is '$adminusername', log in with this</li>\n";

// change the password
update_internal_user_password( $admin, 'moodle' );
set_user_preference('auth_forcepasswordchange','yes');
echo "<li>Primary admin's ('$adminusername') password is now 'moodle'. You will be forced to change this</li>\n";

// remove the administrator from all non-admin roles 
$roles = get_records('role');
foreach( $roles as $role ) {
   if ($role->id != $adminroleid) {
       role_unassign( 0,$admin->id );
   }
}
echo "<li>Removed '$adminusername' from all non-admin roles</li>\n";

// assign primary admin to admin role at site context
role_assign( $adminroleid,$admin->id,0,$sitecontext->id);
echo "<li>Confirmed that primary admin user is assigned to admin role in the site context</li>\n";

// reset anything we can think of back to default
echo "<li>Resetting role related config settings to defaults:</li>\n";
echo "<ul>";
set_config('notloggedinroleid',6); echo "<li>notloggedinroleid set to GUEST</li>";
set_config('guestroleid',6); echo "<li>guestroleid set to GUEST</li>";
set_config('defaultuserroleid',7); echo "<li>defaultuserroleid set to AUTHENTICATED USER</li>";
set_config('defaultcourseroleid',5); echo "<li>defaultcourseroleid set to STUDENT</li>";
set_config('creatornewroleid',3); echo "<li>creatornewroleid set to TEACHER</li>";
set_config('defaultfrontpagerole',0); echo "<li>defaultfrontpagerole to NONE</li>";
echo "</ul><li>Config (re)settings completed</li>\n";
echo "<li>Admin fix completed.</li>";

echo "</ul>";
echo "<p>Now try logging in as the primary admin (see above).";
echo "You should have control of your site again!</p>";

echo "<p>MOST IMPORTANT:<br />";
echo "You *must* delete this file before returning your Moodle site";
echo "to production use.</p>";

unset( $SESSION->wantsurl );
print_footer();


