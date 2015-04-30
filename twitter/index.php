<?php

require_once 'init.php';

$auth = new TwitterAuth($client);

?>

<?php if($auth->signedIn()): ?>
	<p>You are signed in. <a href="signout.php">Sign out</a></p>
	<?php
	//Set tockes to tweet everytime the user signs in 	
	$client->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
	$reply = $client->statuses_update('status=Yeah, I just signed in to DAW LAB 17 and tweeted!!!');
	//print_r($reply);
	?>

<?php else: ?>
	<p> <a href="<?php echo $auth->getAuthUrl(); ?>">Sign in with Twitter</a></p>
<?php endif; ?>
