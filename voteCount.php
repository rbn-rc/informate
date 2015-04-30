<?php

require_once 'twitter/init.php';

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['candidato'])){
		$errors['radio'] = 'Seleccione un candidato.';
	}

	if ($result = $db->query("SELECT 'twitter_id' FROM 'users' WHERE 'votos'=1 AND 'twitter_id' =" + $_SESSION['user_id'])){
		$row = mysqli_fetch_array($result);
		if($row['twitter_id']){
			$errors['radio'] = 'Usted ya ha votado!';
		} else {
			$db->query("UPDATE 'users' SET 'votos'=1 WHERE 'twitter_id'=" + $_SESSION['user_id']);
			//Agregar voto a candidato
		}

	} else {
			$errors['radio'] = 'Error con la base de datos!';
	}


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