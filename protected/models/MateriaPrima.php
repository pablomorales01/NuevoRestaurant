<?php

/**
 * This is the model class for table "materia_prima".
 *
 * The followings are the available columns in table 'materia_prima':
 * @property integer $MP_ID
 * @property integer $BODEGA_ID
 * @property integer $TMP_ID
 * @property string $MPNOMBRE
 * @property string $MPUNIDAD_MEDIDA
 * @property integer $MPSTOCK
 *
 * The followings are the available model relations:
 * @property TipoMateriaPrima $tMP
 * @property Bodega $bODEGA
 * @property Receta[] $recetas
 * @property RegistroComprasMp[] $registroComprasMps
 */
class MateriaPrima extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materia_prima';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BODEGA_ID, TMP_ID, MPSTOCK', 'numerical', 'integerOnly'=>true),
			array('MPNOMBRE', 'length', 'max'=>20),
			array('MPUNIDAD_MEDIDA', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MP_ID, BODEGA_ID, TMP_ID, MPNOMBRE, MPUNIDAD_MEDIDA, MPSTOCK', 'safe', 'on'=>'search'),
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
			'tMP' => array(self::BELONGS_TO, 'TipoMateriaPrima', 'TMP_ID'),
			'bODEGA' => array(self::BELONGS_TO, 'Bodega', 'BODEGA_ID'),
			'recetas' => array(self::HAS_MANY, 'Receta', 'MP_ID'),
			'registroComprasMps' => array(self::HAS_MANY, 'RegistroComprasMp', 'MP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MP_ID' => 'Materia Prima ID',
			'BODEGA_ID' => 'Bodega',
			'TMP_ID' => 'Tmp',
			'MPNOMBRE' => 'Nombre',
			'MPUNIDAD_MEDIDA' => 'Unidad de Medida',
			'MPSTOCK' => 'Stock',
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

		$criteria->compare('MP_ID',$this->MP_ID);
		$criteria->compare('BODEGA_ID',$this->BODEGA_ID);
		$criteria->compare('TMP_ID',$this->TMP_ID);
		$criteria->compare('MPNOMBRE',$this->MPNOMBRE,true);
		$criteria->compare('MPUNIDAD_MEDIDA',$this->MPUNIDAD_MEDIDA,true);
		$criteria->compare('MPSTOCK',$this->MPSTOCK);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MateriaPrima the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
