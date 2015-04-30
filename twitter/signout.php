<?php

require_once 'init.php';

$auth = new TwitterAuth($client);

$auth->signOut();

header('Location: ../survey_gob.php');