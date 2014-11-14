<?php

/**
 * This is the model class for table "datos_usuarios".
 *
 * The followings are the available columns in table 'datos_usuarios':
 * @property integer $USU_ID
 * @property string $RESTONOMBRE
 * @property string $ROLNOMBRE
 * @property string $USUNOMBRES
 * @property string $USUAPELLIDOS
 * @property string $USURUT
 * @property integer $USUTELEFONO
 * @property string $USUESTADO
 * @property string $USUCREATE
 * @property string $USUPASSWORD
 */
class DatosUsuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_ID, USUTELEFONO', 'numerical', 'integerOnly'=>true),
			array('RESTONOMBRE, ROLNOMBRE, USUNOMBRES, USUAPELLIDOS', 'length', 'max'=>25),
			array('USURUT', 'length', 'max'=>12),
			array('USUESTADO', 'length', 'max'=>13),
			array('USUPASSWORD', 'length', 'max'=>30),
			array('USUCREATE', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_ID, RESTONOMBRE, ROLNOMBRE, USUNOMBRES, USUAPELLIDOS, USURUT, USUTELEFONO, USUESTADO, USUCREATE, USUPASSWORD', 'safe', 'on'=>'search'),
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
			'USU_ID' => 'Usu',
			'RESTONOMBRE' => 'Restonombre',
			'ROLNOMBRE' => 'Rolnombre',
			'USUNOMBRES' => 'Usunombres',
			'USUAPELLIDOS' => 'Usuapellidos',
			'USURUT' => 'Usurut',
			'USUTELEFONO' => 'Usutelefono',
			'USUESTADO' => 'Usuestado',
			'USUCREATE' => 'Usucreate',
			'USUPASSWORD' => 'Usupassword',
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
		$criteria->compare('RESTONOMBRE',$this->RESTONOMBRE,true);
		$criteria->compare('ROLNOMBRE',$this->ROLNOMBRE,true);
		$criteria->compare('USUNOMBRES',$this->USUNOMBRES,true);
		$criteria->compare('USUAPELLIDOS',$this->USUAPELLIDOS,true);
		$criteria->compare('USURUT',$this->USURUT,true);
		$criteria->compare('USUTELEFONO',$this->USUTELEFONO);
		$criteria->compare('USUESTADO',$this->USUESTADO,true);
		$criteria->compare('USUCREATE',$this->USUCREATE,true);
		$criteria->compare('USUPASSWORD',$this->USUPASSWORD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosUsuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
