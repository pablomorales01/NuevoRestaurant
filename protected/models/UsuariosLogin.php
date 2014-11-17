<?php

/**
 * This is the model class for table "usuarios_login".
 *
 * The followings are the available columns in table 'usuarios_login':
 * @property integer $USU_ID
 * @property string $username
 * @property string $USUNOMBRES
 * @property string $USUAPELLIDOS
 * @property string $ROLNOMBRE
 * @property string $password
 */
class UsuariosLogin extends CActiveRecord
{

	public function validatePassword($password)
	{
	return $this->hashPassword($password)===$this->password;
	}
 
	public function hashPassword($password)
	{
		return MD5($password);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios_login';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_ID', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>12),
			array('USUNOMBRES, USUAPELLIDOS, ROLNOMBRE', 'length', 'max'=>25),
			array('password', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_ID, username, USUNOMBRES, USUAPELLIDOS, ROLNOMBRE, password', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USU_ID' => 'Id usuario',
			'username' => 'Nombre de usuario',
			'USUNOMBRES' => 'Nombres',
			'USUAPELLIDOS' => 'Apellidos',
			'ROLNOMBRE' => 'Rol',
			'password' => 'Contraseña',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('USU_ID',$this->USU_ID);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('USUNOMBRES',$this->USUNOMBRES,true);
		$criteria->compare('USUAPELLIDOS',$this->USUAPELLIDOS,true);
		$criteria->compare('ROLNOMBRE',$this->ROLNOMBRE,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsuariosLogin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
