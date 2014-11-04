<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $PROV_ID
 * @property string $PROVNOMBRE
 * @property string $PROVRUT
 * @property integer $PROVTELEFONO
 *
 * The followings are the available model relations:
 * @property RegistroComprasMp[] $registroComprasMps
 * @property RegistroComprasPf[] $registroComprasPfs
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PROVTELEFONO', 'numerical', 'integerOnly'=>true),
			array('PROVNOMBRE', 'length', 'max'=>30),
			array('PROVRUT', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PROV_ID, PROVNOMBRE, PROVRUT, PROVTELEFONO', 'safe', 'on'=>'search'),
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
			'registroComprasMps' => array(self::HAS_MANY, 'RegistroComprasMp', 'PROV_ID'),
			'registroComprasPfs' => array(self::HAS_MANY, 'RegistroComprasPf', 'PROV_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PROV_ID' => 'Prov',
			'PROVNOMBRE' => 'Provnombre',
			'PROVRUT' => 'Provrut',
			'PROVTELEFONO' => 'Provtelefono',
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

		$criteria->compare('PROV_ID',$this->PROV_ID);
		$criteria->compare('PROVNOMBRE',$this->PROVNOMBRE,true);
		$criteria->compare('PROVRUT',$this->PROVRUT,true);
		$criteria->compare('PROVTELEFONO',$this->PROVTELEFONO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
