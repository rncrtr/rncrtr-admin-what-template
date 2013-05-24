<?php
/*
* Plugin Name: Rncrtr Admin What Template
Plugin URI: http://github.com/rncrtr/
Description: 
Version: 0.1
Author: Rncrtr
Author URI: http://rncrtr.in
License: GPLv2 or later
*/
add_action( 'init', 'rncrtr_admin_what_template');

function rncrtr_admin_what_template(){
global $user_ID; if( $user_ID ) :
	if( current_user_can('level_10') ) :
		echo '<div style="position: fixed; z-index: 999; margin: 0 auto; left: 0px; margin-top: 0px; padding: 5px; border: 3px solid blue; background: white; color: blue;"><strong>Current Template:</strong> '.get_page_template().'</div>'; 
	endif;
endif;
}
?>