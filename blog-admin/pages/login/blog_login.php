<?php

//Verificação dos dados para acessar o Dashboard
if ( !empty($_POST) && isset($_POST['_login_form']) ) {
	$where = ['user_email' => $_POST['user_email'], 
			  'user_pass' => sha1($_POST['user_pass'])
		     ];

    $result = blog_db_select('users', ['*'], $where);
    
    
    if ( $result ) {
    	$_SESSION['user_data'] = $result[0];
    	header("Location: " . BLOG_ADMIN_URL . '/index.php');
    } else {
    	header("Location: " . BLOG_ADMIN_URL . '/login.php');

    }
}




