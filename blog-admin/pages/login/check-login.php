<?php 

if ( isset($_SESSION['user_data']) ) {
	$user_data = $_SESSION['user_data'];

	$where  = [ 'user_email' => $user_data->user_email, 'user_pass' => $user_data->user_pass];
	$result = blog_db_select('users', ['*'], $where);

	if (!$result ) {
		unset($_SESSION['user_data']);
		header("Location: " . BLOG_ADMIN_URL . '/login.php');
	}
} else {
	header("Location: " . BLOG_ADMIN_URL . '/login.php');
}

