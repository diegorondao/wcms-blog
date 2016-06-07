<?php

//Verificamos o parâmetro passado
$action= strip_tags(filter_input(INPUT_GET,'action'));

require_once('../config.php');
require_once(BLOG_ADMIN_DIR . '/pages/login/check-login.php');
ob_start();

require_once(BLOG_ADMIN_DIR . '/pages/header.php');

switch ($action){
	case 'posts':
		require_once(BLOG_ADMIN_DIR .'/pages/post/posts.php');
		break;
	case 'edit_post':
		require_once(BLOG_ADMIN_DIR .'/pages/post/edit_post.php');
		break;
	case 'save_post':
		require_once(BLOG_ADMIN_DIR .'/pages/post/save.php');
		break;
	case 'delete_post':
		require_once(BLOG_ADMIN_DIR .'/pages/post/delete_post.php');
		break;
	case 'login':
		require_once(BLOG_ADMIN_DIR .'/pages/login/blog_login.php');
		break;
	case 'logout':
		require_once(BLOG_ADMIN_DIR .'/pages/login/blog_logout.php');
		break;
	case 'users':
		require_once(BLOG_ADMIN_DIR .'/pages/users/users.php');
		break;
	case 'edit_users':
		require_once(BLOG_ADMIN_DIR .'/pages/users/edit_users.php');
		break;
	case 'save_users':
		require_once (BLOG_ADMIN_DIR .'/pages/users/save.php');
		break;
	case 'delete_user':
		require_once (BLOG_ADMIN_DIR .'/pages/users/delete_user.php');
		break;
	case 'media':
		require_once(BLOG_ADMIN_DIR .'/pages/media/media.php');
		break;
	case 'edit_media':
		require_once(BLOG_ADMIN_DIR .'/pages/media/edit_media.php');
		break;
	case 'save_media':
		require_once(BLOG_ADMIN_DIR .'/pages/media/save.php');
		break;
	case 'delete_media':
		require_once(BLOG_ADMIN_DIR .'/pages/media/delete_media.php');
		break;
	case 'categories':
		require_once(BLOG_ADMIN_DIR .'/pages/categories/categories.php');
		break;
	case 'edit_category':
		require_once(BLOG_ADMIN_DIR .'/pages/categories/edit_category.php');
		break;
	case 'save_category':
		require_once(BLOG_ADMIN_DIR .'/pages/categories/save.php');
		break;
	case 'delete_category':
		require_once(BLOG_ADMIN_DIR .'/pages/categories/delete_category.php');
		break;		
	default:
		require_once(BLOG_ADMIN_DIR .'/pages/index/index.php');
		break;
}

require_once(BLOG_ADMIN_DIR . '/pages/footer.php');

ob_end_flush();
