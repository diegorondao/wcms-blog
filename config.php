<?php 

session_start();
date_default_timezone_set('America/SaoPaulo');

ini_set('default_charset', 'utf-8');

//Constantes
define('BLOG_BASE_DIR', __DIR__);
define('BLOG_SITE_DIR',BLOG_BASE_DIR .'/site');
define('BLOG_ADMIN_DIR',BLOG_BASE_DIR .'/blog-admin');
define('BLOG_UPLOAD_DIR',BLOG_SITE_DIR .'/uploads');

define('BLOG_BASE_URL', 'http://localhost/blog/');
//define('BLOG_BASE_URL', 'http://projeto-blog.esy.es');
define('BLOG_SITE_URL',  BLOG_BASE_URL  . '/site');
define('BLOG_ADMIN_URL',  BLOG_BASE_URL . '/blog-admin');
define('BLOG_UPLOAD_URL', BLOG_SITE_URL . '/uploads');

define('BLOG_PROJETO_NOME' , 'Blog');

// IMPORT  API
require_once (BLOG_ADMIN_DIR .'/api/database_api.php');
require_once (BLOG_ADMIN_DIR .'/api/users_api.php');
require_once (BLOG_ADMIN_DIR .'/api/category_api.php');
require_once (BLOG_ADMIN_DIR .'/api/uploads_api.php');
require_once (BLOG_ADMIN_DIR .'/api/posts_api.php');
require_once (BLOG_ADMIN_DIR .'/database/conn.php');


//Require Utils
require_once (BLOG_ADMIN_DIR .'/include/util.php');




