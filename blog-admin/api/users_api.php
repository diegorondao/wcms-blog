<?php
//ini_set("memory_limit","512M");

function blog_fetch_all_users() {
	return blog_db_select('users', ['*']);
}

function blog_get_current_user() {
	if ( isset($_SESSION['user_data']) ) {
		return $_SESSION['user_data']; 
	}
}

function blog_get_current_user_ID() {
	return blog_get_current_user()->ID;
}

