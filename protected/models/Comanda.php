<?php

/**
 * This is the model class for table "comanda".
 *
 * The followings are the available columns in table 'comanda':
 * @property integer $COM_ID
 * @property integer $VENTA_ID
 * @property integer $MENU_ID
 * @property integer $MESANUM
 * @property integer $USU_ID
 * @property integer $USU_USU_ID
 * @property string $COMFECHA
 * @property string $COM_ESTADO
 * @property integer $RESTO_ID
 * @property integer $COM_CANTIDAD
 */
class Comanda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comanda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MESANUM, RESTO_ID, COM_CANTIDAD', 'required'),
			array('VENTA_ID, MENU_ID, MESANUM, USU_ID, USU_USU_ID, RESTO_ID, COM_CANTIDAD', 'numerical', 'integerOnly'=>true),
			array('COM_ESTADO', 'length', 'max'=>30),
			array('COMFECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COM_ID, VENTA_ID, MENU_ID, MESANUM, USU_ID, USU_USU_ID, COMFECHA, COM_ESTADO, RESTO_ID, COM_CANTIDAD', 'safe', 'on'=>'search'),
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
			'COM_ID' => 'Com',
			'VENTA_ID' => 'Venta',
			'MENU_ID' => 'Menu',
			'MESANUM' => 'Mesanum',
			'USU_ID' => 'Usu',
			'USU_USU_ID' => 'Usu Usu',
			'COMFECHA' => 'Comfecha',
			'COM_ESTADO' => 'Com Estado',
			'RESTO_ID' => 'Resto',
			'COM_CANTIDAD' => 'Com Cantidad',
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

		$criteria->compare('COM_ID',$this->COM_ID);
		$criteria->compare('VENTA_ID',$this->VENTA_ID);
		$criteria->compare('MENU_ID',$this->MENU_ID);
		$criteria->compare('MESANUM',$this->MESANUM);
		$criteria->compare('USU_ID',$this->USU_ID);
		$criteria->compare('USU_USU_ID',$this->USU_USU_ID);
		$criteria->compare('COMFECHA',$this->COMFECHA,true);
		$criteria->compare('COM_ESTADO',$this->COM_ESTADO,true);
		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('COM_CANTIDAD',$this->COM_CANTIDAD);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comanda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
