<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			//11.111.111-1
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}

/*   LO DEL RUBEN
	<?php
class UserIdentity extends CUserIdentity 
{
    private $_id;  //lo ocupa para guaradr el username. (11.111.111-1)
    public function authenticate()
    {
        $user=UsuLogin::model()->findByAttributes(array('username'=>$this->username)); // crea la vista de todos los usuarios login
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->username; //_id le pasa el username (admin)
            $this->username=$user->PER_ROLE; //y lo que tenia username, le pasa la variable ROL. (NOMBRE).
            $this->setState('role', $user->PER_ROLE);
            $this->setState('nombre',$user->PER_NOMBRE);
            $this->setState('carrera',$user->CAR_CODIGO);
            $this->setState('ID',$user->PER_ID);
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
    
    public function getId()
    {
        return $this->_id;
    }
}
*/