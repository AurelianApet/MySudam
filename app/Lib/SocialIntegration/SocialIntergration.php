<?php
abstract class SocialIntergration
{
	/**
	 * IDp ID (or unique name)
	 * @var Numeric/String
	 */
	public $providerId = NULL;

	/**
	 * specific provider adapter config
	 * @var array
	 */
	public $config     = NULL;

   	/**
	 * provider extra parameters
	 * @var array
	 */
	public $params     = NULL;

	/**
	 * Endpoint URL for that provider
	 * @var String
	 */
	public $endpoint   = NULL; 

	/**
	 * SocialIntegration_User obj, represents the current loggedin user
	 * @var object
	 */
	public $user       = NULL;

	/**
	 * the provider api client (optional)
	 * @var String
	 */
	public $api        = NULL; 

	/**
	 * Common providers adapter constructor
	 * @param Numeric/String $providerId
	 * @param Array $config
	 * @param Array $params
	 */
	function __construct( $providerId, $config, $params = NULL )
	{              
		# init the IDp adapter parameters, get them from the cache if possible
		if( ! $params ){
			$this->params = SocialIntegration_Auth::storage()->get( "hauth_session.$providerId.id_provider_params" );
		}
		else{
			$this->params = $params;
		}

		// idp id
		$this->providerId = $providerId;

		// set SocialIntegrationAuth endpoint for this provider
		$this->endpoint = SocialIntegration_Auth::storage()->get( "hauth_session.$providerId.hauth_endpoint" );

		// idp config
		$this->config = $config;

		// new user instance
                /*
		$this->user = new SocialIntegration_User();
		$this->user->providerId = $providerId;
                 * 
                 */

		// initialize the current provider adapter
		$this->initialize(); 

	}

	// --------------------------------------------------------------------

	/**
	* IDp wrappers initializer
	*
	* The main job of wrappers initializer is to performs (depend on the IDp api client it self): 
	*     - include some libs needed by this provider,
	*     - check IDp key and secret,
	*     - set some needed parameters (stored in $this->params) by this IDp api client
	*     - create and setup an instance of the IDp api client on $this->api 
	*/
	abstract protected function initialize(); 

	// --------------------------------------------------------------------

	/**
	* begin login 
	*/
	abstract protected function loginBegin();

	// --------------------------------------------------------------------

	/**
	* finish login
	*/
	abstract protected function loginFinish();

	// --------------------------------------------------------------------

   	/**
	* generic logout, just erase current provider adapter stored data to let SocialIntegration_Auth all forget about it
	*/
	function logout()
	{
		// SocialIntegration_Logger::info( "Enter [{$this->providerId}]::logout()" );

		$this->clearTokens();

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	* grab the user profile from the IDp api client
	*/
	function getUserProfile()
	{		
		throw new Exception( "Provider does not support this feature.", 8 ); 
	}

	// --------------------------------------------------------------------

	/**
	* load the current logged in user contacts lists from the IDp api client
	*/
	function getUserContacts() 
	{		
		throw new Exception( "Provider does not support this feature.", 8 ); 
	}

	// --------------------------------------------------------------------

	/**
	* return the user activity stream  
	*/
	function getUserActivity( $stream ) 
	{		
		throw new Exception( "Provider does not support this feature.", 8 ); 
	}

	// --------------------------------------------------------------------

	/**
	* return the user activity stream  
	*/ 
	function setUserStatus( $status )
	{		
		throw new Exception( "Provider does not support this feature.", 8 ); 
	}

	// --------------------------------------------------------------------

	/**
	* return true if the user is connected to the current provider
	*/ 
	public function isUserConnected()
	{
		return (bool) SocialIntegration_Auth::storage()->get( "hauth_session.{$this->providerId}.is_logged_in" );
	}

	// --------------------------------------------------------------------

	/**
	* set user to connected 
	*/ 
	public function setUserConnected()
	{
		// SocialIntegration_Logger::info( "Enter [{$this->providerId}]::setUserConnected()" );
		
		SocialIntegration_Auth::storage()->set( "hauth_session.{$this->providerId}.is_logged_in", 1 );
	}

	// --------------------------------------------------------------------

	/**
	* set user to unconnected 
	*/ 
	public function setUserUnconnected()
	{
		// SocialIntegration_Logger::info( "Enter [{$this->providerId}]::setUserUnconnected()" );
		
		SocialIntegration_Auth::storage()->set( "hauth_session.{$this->providerId}.is_logged_in", 0 ); 
	}

	// --------------------------------------------------------------------

	/**
	* get or set a token 
	*/ 
	public function token( $token, $value = NULL )
	{
		if( $value === NULL ){
			return SocialIntegration_Auth::storage()->get( "hauth_session.{$this->providerId}.token.$token" );
		}
		else{
			SocialIntegration_Auth::storage()->set( "hauth_session.{$this->providerId}.token.$token", $value );
		}
	}

	// --------------------------------------------------------------------

	/**
	* delete a stored token 
	*/ 
	public function deleteToken( $token )
	{
		SocialIntegration_Auth::storage()->delete( "hauth_session.{$this->providerId}.token.$token" );
	}

	// --------------------------------------------------------------------

	/**
	* clear all existent tokens for this provider
	*/ 
	public function clearTokens()
	{ 
		SocialIntegration_Auth::storage()->deleteMatch( "hauth_session.{$this->providerId}." );
	}
        

	function sendInvite($friendsToJoin, $user_data = null) 
	{		
		throw new Exception( "Provider does not support this feature.", 8 ); 
	}
}
