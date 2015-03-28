<?php

/**
 * This is the model class for table "receta".
 *
 * The followings are the available columns in table 'receta':
 * @property integer $RECETACANTIDADPRODUCTO
 * @property string $RECETAUNIDADMEDIDA
 * @property integer $PVENTA_ID
 * @property integer $MP_ID
 * @property integer $RESTO_ID
 *
 * The followings are the available model relations:
 * @property MateriaPrima $mP
 * @property ProductoElaborado $pVENTA
 */
class Receta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'receta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PVENTA_ID, MP_ID', 'required'),
			array('RECETACANTIDADPRODUCTO, PVENTA_ID, MP_ID, RESTO_ID', 'numerical', 'integerOnly'=>true),
			array('RECETAUNIDADMEDIDA', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RECETACANTIDADPRODUCTO, RECETAUNIDADMEDIDA, PVENTA_ID, MP_ID, RESTO_ID', 'safe', 'on'=>'search'),
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
			'mP' => array(self::BELONGS_TO, 'MateriaPrima', 'MP_ID'),
			'pVENTA' => array(self::BELONGS_TO, 'ProductoElaborado', 'PVENTA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RECETACANTIDADPRODUCTO' => 'Recetacantidadproducto',
			'RECETAUNIDADMEDIDA' => 'Recetaunidadmedida',
			'PVENTA_ID' => 'Pventa',
			'MP_ID' => 'Mp',
			'RESTO_ID' => 'Resto',
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

		$criteria->compare('RECETACANTIDADPRODUCTO',$this->RECETACANTIDADPRODUCTO);
		$criteria->compare('RECETAUNIDADMEDIDA',$this->RECETAUNIDADMEDIDA,true);
		$criteria->compare('PVENTA_ID',$this->PVENTA_ID);
		$criteria->compare('MP_ID',$this->MP_ID);
		$criteria->compare('RESTO_ID',$this->RESTO_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Receta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
