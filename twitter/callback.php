<?php

require_once 'init.php';

$auth = new TwitterAuth($client, $db);

//echo $_SESSION['oauth_token'];
//echo $_SESSION['oauth_token_secret'];

 //print_r($_SESSION);

/*Nota: No acceder con localhost, si no no guarda las variables de sesion*/

if($auth->signIn()){
	header('Location: ../survey_gob.php');
} else {
	die('Sign in failed.');
}