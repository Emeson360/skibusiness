<?php
session_start();
define('ROOT_URL', 'http://localhost/skibusiness/');
// define('ROOT_URL', '/');


function isLoggedIn() {
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}



// Destroy the session and logout Admin 
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header('location: ' . ROOT_URL . 'signin.php');
}



// check if user is an admin
// function isAdmin() {
// 	if (isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 1 ) {
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

function dd($data) {
	var_dump($data);
	die;
}

?>