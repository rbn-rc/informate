<?php

class TwitterAuth 
{
	protected $client;

	protected $db;

	protected $clientCallback = 'http://127.0.0.1/proyecto_3/twitter/callback.php';


	public function __construct(\Codebird\Codebird $client, DB $db = null)
	{
		$this->db = $db;
		$this->client = $client;	
	}

	public function signedIn()
	{
		return isset($_SESSION['user_id']);
	}

	public function signIn()
	{
		if($this->hasCallback()){
			$this->verifyTokens();

			$reply = $this->client->oauth_accessToken([
				'oauth_verifier' => $_GET['oauth_verifier']
			]);

			if($reply->httpstatus === 200){

				$this->storeTokens($reply->oauth_token, $reply->oauth_token_secret);

				$_SESSION['user_id'] = $reply->user_id;

				//Store the user account in the database
				$this->storeUser($reply);

				return true;
			}
			//echo '<pre>', print_r($reply), '</pre>'; //Debug: Show token info
		}

		return false;
	}

	public function signOut()
	{
		unset($_SESSION['user_id']);
	}

	public function hasCallback()
	{
		return isset($_GET['oauth_verifier']);
	}

	public function getAuthUrl(){
		$this->requestTokens();
		$this->verifyTokens();

		return $this->client->oauth_authenticate();
	}

	protected function requestTokens()
	{
		$reply = $this->client->oauth_requestToken([
			'oauth_callback' => $this->clientCallback
		]);

		//echo '<pre>', print_r($reply), '</pre>'; //Debug, check tokens

		$this->storeTokens($reply->oauth_token,  $reply->oauth_token_secret);

		//var_dump($reply);
	}

	protected function storeTokens($token, $tokenSecret)
	{
		$_SESSION['oauth_token'] =  $token;
		$_SESSION['oauth_token_secret'] =  $tokenSecret;

	}

	protected function verifyTokens()
	{
		$this->client->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
	}

	protected function storeUser($payload)
	{
		$this->db->query("
			INSERT INTO users (twitter_id, twitter_username)
			VALUES ({$payload->user_id},'{$payload->screen_name}')
			ON DUPLICATE KEY UPDATE id = id
		");
	}
}