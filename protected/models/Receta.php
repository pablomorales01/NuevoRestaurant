<?php

/**
 * This is the model class for table "receta".
 *
 * The followings are the available columns in table 'receta':
 * @property integer $RECETA_ID
 * @property integer $PVENTA_ID
 * @property integer $MP_ID
 * @property string $RECETANOMBRE
 * @property integer $RECETACANTIDADPRODUCTO
 * @property string $RECETAUNIDADMEDIDA
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
			array('RECETANOMBRE', 'required'),
			array('PVENTA_ID, MP_ID, RECETACANTIDADPRODUCTO', 'numerical', 'integerOnly'=>true),
			array('RECETANOMBRE', 'length', 'max'=>50),
			array('RECETAUNIDADMEDIDA', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RECETA_ID, PVENTA_ID, MP_ID, RECETANOMBRE, RECETACANTIDADPRODUCTO, RECETAUNIDADMEDIDA', 'safe', 'on'=>'search'),
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
			'RECETA_ID' => 'Receta',
			'PVENTA_ID' => 'Prod. Elaborado',
			'MP_ID' => 'Materia Prima',
			'RECETANOMBRE' => 'Nombre Receta',
			'RECETACANTIDADPRODUCTO' => 'Cantidad',
			'RECETAUNIDADMEDIDA' => 'Unidad de Medida',
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

		$criteria->compare('RECETA_ID',$this->RECETA_ID);
		$criteria->compare('PVENTA_ID',$this->PVENTA_ID);
		$criteria->compare('MP_ID',$this->MP_ID);
		$criteria->compare('RECETANOMBRE',$this->RECETANOMBRE,true);
		$criteria->compare('RECETACANTIDADPRODUCTO',$this->RECETACANTIDADPRODUCTO);
		$criteria->compare('RECETAUNIDADMEDIDA',$this->RECETAUNIDADMEDIDA,true);

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
