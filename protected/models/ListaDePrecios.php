<?php

/**
 * This is the model class for table "lista_de_precios".
 *
 * The followings are the available columns in table 'lista_de_precios':
 * @property integer $MENU_ID
 * @property string $MENUNOMBRE
 * @property integer $MENUPRECIO
 * @property integer $MENUCANTIDADPERSONAS
 * @property integer $CALORIASTOTAL
 *
 * The followings are the available model relations:
 * @property Comanda[] $comandas
 * @property ProductoVenta[] $productoVentas
 */
class ListaDePrecios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lista_de_precios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MENUPRECIO, MENUCANTIDADPERSONAS, CALORIASTOTAL', 'numerical', 'integerOnly'=>true),
			array('MENUNOMBRE', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MENU_ID, MENUNOMBRE, MENUPRECIO, MENUCANTIDADPERSONAS, CALORIASTOTAL', 'safe', 'on'=>'search'),
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
			'comandas' => array(self::HAS_MANY, 'Comanda', 'MENU_ID'),
			'productoVentas' => array(self::MANY_MANY, 'ProductoVenta', 'precio_producto(MENU_ID, PVENTA_ID)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MENU_ID' => 'Menu',
			'MENUNOMBRE' => 'Menunombre',
			'MENUPRECIO' => 'Menuprecio',
			'MENUCANTIDADPERSONAS' => 'Menucantidadpersonas',
			'CALORIASTOTAL' => 'Caloriastotal',
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
		$criteria->compare('MENUNOMBRE',$this->MENUNOMBRE,true);
		$criteria->compare('MENUPRECIO',$this->MENUPRECIO);
		$criteria->compare('MENUCANTIDADPERSONAS',$this->MENUCANTIDADPERSONAS);
		$criteria->compare('CALORIASTOTAL',$this->CALORIASTOTAL);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListaDePrecios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
