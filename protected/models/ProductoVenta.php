<?php

/**
 * This is the model class for table "producto_venta".
 *
 * The followings are the available columns in table 'producto_venta':
 * @property integer $PVENTA_ID
 * @property string $PVENTANOMBRE
 *
 * The followings are the available model relations:
 * @property DetalleComanda[] $detalleComandas
 * @property ListaDePrecios[] $listaDePrecioses
 * @property ProductoElaborado $productoElaborado
 * @property ProductoFinal $productoFinal
 */
class ProductoVenta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto_venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PVENTANOMBRE', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PVENTA_ID, PVENTANOMBRE', 'safe', 'on'=>'search'),
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
			'detalleComandas' => array(self::HAS_MANY, 'DetalleComanda', 'PVENTA_ID'),
			'listaDePrecioses' => array(self::MANY_MANY, 'ListaDePrecios', 'precio_producto(PVENTA_ID, MENU_ID)'),
			'productoElaborado' => array(self::HAS_ONE, 'ProductoElaborado', 'PVENTA_ID'),
			'productoFinal' => array(self::HAS_ONE, 'ProductoFinal', 'PVENTA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PVENTA_ID' => 'Pventa',
			'PVENTANOMBRE' => 'Pventanombre',
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

		$criteria->compare('PVENTA_ID',$this->PVENTA_ID);
		$criteria->compare('PVENTANOMBRE',$this->PVENTANOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductoVenta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
