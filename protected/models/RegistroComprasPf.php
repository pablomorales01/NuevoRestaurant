<?php

/**
 * This is the model class for table "registro_compras_pf".
 *
 * The followings are the available columns in table 'registro_compras_pf':
 * @property integer $RPF_ID
 * @property integer $PVENTA_ID
 * @property integer $PROV_ID
 * @property string $RVTASFECHA
 * @property integer $RPFPRECIO_COMPRA
 * @property integer $RPFPCANTIDAD
 *
 * The followings are the available model relations:
 * @property Proveedor $pROV
 * @property ProductoFinal $pVENTA
 */
class RegistroComprasPf extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro_compras_pf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PVENTA_ID, PROV_ID, RPFPRECIO_COMPRA, RPFPCANTIDAD', 'numerical', 'integerOnly'=>true),
			array('RVTASFECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RPF_ID, PVENTA_ID, PROV_ID, RVTASFECHA, RPFPRECIO_COMPRA, RPFPCANTIDAD', 'safe', 'on'=>'search'),
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
			'pROV' => array(self::BELONGS_TO, 'Proveedor', 'PROV_ID'),
			'pVENTA' => array(self::BELONGS_TO, 'ProductoFinal', 'PVENTA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RPF_ID' => 'Rpf',
			'PVENTA_ID' => 'Pventa',
			'PROV_ID' => 'Prov',
			'RVTASFECHA' => 'Rvtasfecha',
			'RPFPRECIO_COMPRA' => 'Rpfprecio Compra',
			'RPFPCANTIDAD' => 'Rpfpcantidad',
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

		$criteria->compare('RPF_ID',$this->RPF_ID);
		$criteria->compare('PVENTA_ID',$this->PVENTA_ID);
		$criteria->compare('PROV_ID',$this->PROV_ID);
		$criteria->compare('RVTASFECHA',$this->RVTASFECHA,true);
		$criteria->compare('RPFPRECIO_COMPRA',$this->RPFPRECIO_COMPRA);
		$criteria->compare('RPFPCANTIDAD',$this->RPFPCANTIDAD);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegistroComprasPf the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
