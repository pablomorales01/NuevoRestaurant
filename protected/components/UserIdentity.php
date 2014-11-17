
<?php
class UserIdentity extends CUserIdentity 
{
    private $_id;
    public function authenticate()
    {
        $user=UsuariosLogin::model()->findByAttributes(array('username'=>$this->username));

        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;

        elseif ($user->password != $this->password)
        	$this->errorCode=self::ERROR_PASSWORD_INVALID;
       /* else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;*/

        else
        {
            $this->_id=$user->username;
            $this->username=$user->ROLNOMBRE;

 			$this->setState('ROL', $user->ROLNOMBRE);
            $this->setState('NOMBRES',$user->USUNOMBRES);
            $this->setState('APELLIDOS', $user->USUAPELLIDOS);
            $this->setState('ID', $user->USU_ID);
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
    
    public function getId()
    {
        return $this->_id;
    }
    
}