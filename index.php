<?php
include('config.php');

include(BLOG_ADMIN_DIR . '/include/template_api.php');

$page = _get('view');

switch($page) {
	case 'single':
		include( BLOG_SITE_DIR . '/single.php');
	break;
	case 'page':
		include( BLOG_SITE_DIR . '/page.php' );
	break;
	case 'category':
		include( BLOG_SITE_DIR . '/category.php');
	break;
	default:
		include( BLOG_SITE_DIR . '/index.php');
	break;
}
?>