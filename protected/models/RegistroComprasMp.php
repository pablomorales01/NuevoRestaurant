<?php

/**
 * This is the model class for table "registro_compras_mp".
 *
 * The followings are the available columns in table 'registro_compras_mp':
 * @property integer $RCMP_ID
 * @property integer $PROV_ID
 * @property integer $MP_ID
 * @property integer $RCMPPRECIO_COMPRA
 * @property integer $RCMPCANTIDAD
 * @property string $RCMPFECHA
 * @property integer $RESTO_ID
 *
 * The followings are the available model relations:
 * @property MateriaPrima $mP
 * @property Proveedor $pROV
 */
class RegistroComprasMp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro_compras_mp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PROV_ID, MP_ID, RCMPPRECIO_COMPRA, RCMPCANTIDAD, RESTO_ID', 'numerical', 'integerOnly'=>true),
			array('RCMPFECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RCMP_ID, PROV_ID, MP_ID, RCMPPRECIO_COMPRA, RCMPCANTIDAD, RCMPFECHA, RESTO_ID', 'safe', 'on'=>'search'),
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
			'pROV' => array(self::BELONGS_TO, 'Proveedor', 'PROV_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RCMP_ID' => 'id registro',
			'PROV_ID' => 'Nombre',
			'MP_ID' => 'Materia Prima',
			'RCMPPRECIO_COMPRA' => 'Total Compra',
			'RCMPCANTIDAD' => 'Cantidad',
			'RCMPFECHA' => 'Fecha',
			'RESTO_ID' => 'Resto id',
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

		$criteria->compare('RCMP_ID',$this->RCMP_ID);
		$criteria->compare('PROV_ID',$this->PROV_ID);
		$criteria->compare('MP_ID',$this->MP_ID);
		$criteria->compare('RCMPPRECIO_COMPRA',$this->RCMPPRECIO_COMPRA);
		$criteria->compare('RCMPCANTIDAD',$this->RCMPCANTIDAD);
		$criteria->compare('RCMPFECHA',$this->RCMPFECHA,true);
		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('RESTO_ID', Yii::app()->user->RESTAURANT);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegistroComprasMp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
