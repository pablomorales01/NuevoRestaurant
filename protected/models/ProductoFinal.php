<?php

/**
 * This is the model class for table "producto_final".
 *
 * The followings are the available columns in table 'producto_final':
 * @property integer $PVENTA_ID
 * @property string $PVENTANOMBRE
 * @property integer $MENU_ID
 * @property integer $BODEGA_ID
 * @property integer $PFINALSTOCK
 * @property integer $GRAMOS
 * @property integer $CALORIAS
 *
 * The followings are the available model relations:
 * @property ProductoVenta $pVENTA
 * @property Bodega $bODEGA
 * @property RegistroComprasPf[] $registroComprasPfs
 */
class ProductoFinal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto_final';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MENU_ID, BODEGA_ID, PFINALSTOCK, GRAMOS, CALORIAS', 'numerical', 'integerOnly'=>true),
			array('PVENTANOMBRE', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PVENTA_ID, PVENTANOMBRE, MENU_ID, BODEGA_ID, PFINALSTOCK, GRAMOS, CALORIAS', 'safe', 'on'=>'search'),
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
			'pVENTA' => array(self::BELONGS_TO, 'ProductoVenta', 'PVENTA_ID'),
			'bODEGA' => array(self::BELONGS_TO, 'Bodega', 'BODEGA_ID'),
			'registroComprasPfs' => array(self::HAS_MANY, 'RegistroComprasPf', 'PVENTA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PVENTA_ID' => 'Producto final id',
			'PVENTANOMBRE' => 'Producto',
			'MENU_ID' => 'Menú',
			'BODEGA_ID' => 'Bodega',
			'PFINALSTOCK' => 'Stock',
			'GRAMOS' => 'Gramos',
			'CALORIAS' => 'Calorias',
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
		$criteria->compare('MENU_ID',$this->MENU_ID);
		$criteria->compare('BODEGA_ID',$this->BODEGA_ID);
		$criteria->compare('PFINALSTOCK',$this->PFINALSTOCK);
		$criteria->compare('GRAMOS',$this->GRAMOS);
		$criteria->compare('CALORIAS',$this->CALORIAS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductoFinal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
