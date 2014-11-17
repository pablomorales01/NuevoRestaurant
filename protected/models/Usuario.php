<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $USU_ID
 * @property integer $RESTO_ID
 * @property integer $ROL_ID
 * @property string $USUPASSWORD
 * @property string $USUCREATE
 * @property string $USUNOMBRES
 * @property string $USUAPELLIDOS
 * @property string $USURUT
 * @property integer $USUTELEFONO
 * @property string $USUESTADO
 *
 * The followings are the available model relations:
 * @property Comanda[] $comandas
 * @property Comanda[] $comandas1
 * @property Restaurant $rESTO
 * @property TipoRol $rOL
 * @property Venta[] $ventas
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RESTO_ID, ROL_ID, USUTELEFONO', 'numerical', 'integerOnly'=>true),
			array('USUPASSWORD', 'length', 'max'=>30),
			//array('USURUT', 'validateRut'),
			array('USUNOMBRES, USUAPELLIDOS, USURUT, USUPASSWORD, ROL_ID', 'required'),
			array('USUNOMBRES, USUAPELLIDOS', 'length', 'max'=>25),
			array('USURUT', 'length', 'max'=>12),
			array('USUESTADO', 'length', 'max'=>13),
			array('USUCREATE', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_ID, RESTO_ID, ROL_ID, USUPASSWORD, USUCREATE, USUNOMBRES, USUAPELLIDOS, USURUT, USUTELEFONO, USUESTADO', 'safe', 'on'=>'search'),
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
			'comandas' => array(self::HAS_MANY, 'Comanda', 'USU_USU_ID'),
			'comandas1' => array(self::HAS_MANY, 'Comanda', 'USU_ID'),
			'rESTO' => array(self::BELONGS_TO, 'Restaurant', 'RESTO_ID'),
			'Rol' => array(self::BELONGS_TO, 'TipoRol', 'ROL_ID'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'USU_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USU_ID' => 'Id',
			'RESTO_ID' => 'Restaurant',
			'ROL_ID' => 'Rol',
			'USUPASSWORD' => 'Contraseña',
			'USUCREATE' => 'Fecha de creación',
			'USUNOMBRES' => 'Nombres',
			'USUAPELLIDOS' => 'Apellidos',
			'USURUT' => 'Rut',
			'USUTELEFONO' => 'Teléfono',
			'USUESTADO' => 'Estado cuenta',
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
		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('ROL_ID',$this->ROL_ID);
		$criteria->compare('USUPASSWORD',$this->USUPASSWORD,true);
		$criteria->compare('USUCREATE',$this->USUCREATE,true);
		$criteria->compare('USUNOMBRES',$this->USUNOMBRES,true);
		$criteria->compare('USUAPELLIDOS',$this->USUAPELLIDOS,true);
		$criteria->compare('USURUT',$this->USURUT,true);
		$criteria->compare('USUTELEFONO',$this->USUTELEFONO);
		$criteria->compare('USUESTADO',$this->USUESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function validateRut($attribute, $params) {

    if(strlen($this->$attribute)==12){
    $rut = str_split($this->$attribute);
	$suma=0;
	$suma += $rut[9]*2;
	$suma += $rut[8]*3;
	$suma += $rut[7]*4;
	$suma += $rut[5]*5;
	$suma += $rut[4]*6;
	$suma += $rut[3]*7;
	$suma += $rut[1]*2;
	$suma += $rut[0]*3;
	$resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
   if($dv != $rut[11]){
		$this->addError($attribute, 'Rut inválido.');
	}
   }
   else {$this->addError($attribute, 'Rut inválido.');}
}

   




	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
