<?php
global $wpdb;
$user_count = $wpdb->get_results("SELECT * FROM wp_signups_no");
foreach($user_count as $row)
{$old_value = $row->signups;}
$new_value = $old_value + 1;
$wpdb->update( 
	'wp_signups_no', 
	array( 
		'signups' => $new_value
	), 
	array( 'ID' => 1 ), 
	array( 
		'%d'
	), 
	array( '%d' ) 
);
?>