<?php

/**
 * This is the model class for table "precio_producto".
 *
 * The followings are the available columns in table 'precio_producto':
 * @property integer $MENU_ID
 * @property integer $PVENTA_ID
 * @property integer $RESTO_ID
 * @property integer $PPCANTIDAD
 */
class PrecioProducto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'precio_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MENU_ID, PVENTA_ID, RESTO_ID, PPCANTIDAD', 'required'),
			array('MENU_ID, PVENTA_ID, RESTO_ID, PPCANTIDAD', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MENU_ID, PVENTA_ID, RESTO_ID, PPCANTIDAD', 'safe', 'on'=>'search'),
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
			'MENU_ID' => 'Menu',
			'PVENTA_ID' => 'Pventa',
			'RESTO_ID' => 'Resto',
			'PPCANTIDAD' => 'Ppcantidad',
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

		$criteria->compare('MENU_ID',$this->MENU_ID);
		$criteria->compare('PVENTA_ID',$this->PVENTA_ID);
		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('PPCANTIDAD',$this->PPCANTIDAD);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PrecioProducto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
