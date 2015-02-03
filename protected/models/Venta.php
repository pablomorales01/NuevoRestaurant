<?php

/**
 * This is the model class for table "venta".
 *
 * The followings are the available columns in table 'venta':
 * @property integer $VENTA_ID
 * @property integer $USU_ID
 * @property string $VENTAFECHA
 * @property integer $VENTATOTAL
 * @property string $VENTAFORMADEPAGO
 *
 * The followings are the available model relations:
 * @property Comanda[] $comandas
 * @property Usuario $uSU
 */
class Venta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_ID, VENTATOTAL', 'numerical', 'integerOnly'=>true),
			array('VENTAFORMADEPAGO', 'length', 'max'=>15),
			array('VENTAFECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('VENTA_ID, USU_ID, VENTAFECHA, VENTATOTAL, VENTAFORMADEPAGO', 'safe', 'on'=>'search'),
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
			'comandas' => array(self::HAS_MANY, 'Comanda', 'VENTA_ID'),
			'uSU' => array(self::BELONGS_TO, 'Usuario', 'USU_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'VENTA_ID' => 'Id de venta',
			'USU_ID' => 'Trabajador',
			'VENTAFECHA' => 'Fecha',
			'VENTATOTAL' => 'Total',
			'VENTAFORMADEPAGO' => 'Forma de Pago',
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

		$criteria->compare('VENTA_ID',$this->VENTA_ID);
		$criteria->compare('USU_ID',$this->USU_ID);
		$criteria->compare('VENTAFECHA',$this->VENTAFECHA,true);
		$criteria->compare('VENTATOTAL',$this->VENTATOTAL);
		$criteria->compare('VENTAFORMADEPAGO',$this->VENTAFORMADEPAGO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
