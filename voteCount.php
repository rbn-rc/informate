<?php

require_once 'twitter/init.php';

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
//$mysqli = new mysqli('localhost', 'root', '', 'twitter_example');
// if ($mysqli->connect_errno) {
//     $errors['sql'] = "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
// } else {
	//$errors['sql'] = "Success! " . $_SESSION['user_id'];

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['candidato'])){
		$errors['radio'] = 'Seleccione un candidato.';
	}

	if($_POST['tipo'] == 'gob'){
		if ($result = $db->query("SELECT twitter_id FROM users WHERE voto_gob=1 AND twitter_id =" . $_SESSION['user_id'])){
			$row = mysqli_fetch_array($result);
			if($row['twitter_id']){
				$errors['radio'] = 'Usted ya ha votado por gobernador!';
			} else {
				$db->query("UPDATE users SET voto_gob=1 WHERE twitter_id=" . $_SESSION['user_id']);
				//Agregar voto a candidato
			}

		} else {
			$errors['radio'] = 'Error con la base de datos! ';
		}

	} else if ($_POST['tipo'] == 'mun'){
		if ($result = $db->query("SELECT twitter_id FROM users WHERE voto_mun=1 AND twitter_id =" . $_SESSION['user_id'])){
			$row = mysqli_fetch_array($result);
			if($row['twitter_id']){
				$errors['radio'] = 'Usted ya ha votado por presidente municipal!';
			} else {
				$db->query("UPDATE users SET voto_mun=1 WHERE twitter_id=" . $_SESSION['user_id']);
				//Agregar voto a candidato
			}

		} else {
			$errors['radio'] = 'Error con la base de datos!';
		}
	} else {
		$errors['origen'] = $_POST['tipo'];
	}
	
// }

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message

		// DO ALL YOUR FORM PROCESSING HERE
		// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Voto registrado!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);