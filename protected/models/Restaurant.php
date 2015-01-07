<?php

/**
 * This is the model class for table "restaurant".
 *
 * The followings are the available columns in table 'restaurant':
 * @property integer $RESTO_ID
 * @property string $RESTONOMBRE
 * @property string $RESTOFECHACREACION
 *
 * The followings are the available model relations:
 * @property Usuario[] $usuarios
 */
class Restaurant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'restaurant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RESTONOMBRE', 'length', 'max'=>25),
			array('RESTOFECHACREACION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RESTO_ID, RESTONOMBRE, RESTOFECHACREACION', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'RESTO_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RESTO_ID' => 'Id restaurant',
			'RESTONOMBRE' => 'Nombre restaurant',
			'RESTOFECHACREACION' => 'Fecha de creación',
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

		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('RESTONOMBRE',$this->RESTONOMBRE,true);
		$criteria->compare('RESTOFECHACREACION',$this->RESTOFECHACREACION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Restaurant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
