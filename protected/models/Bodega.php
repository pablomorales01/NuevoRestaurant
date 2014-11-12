<?php

/**
 * This is the model class for table "bodega".
 *
 * The followings are the available columns in table 'bodega':
 * @property integer $BODEGA_ID
 * @property string $BODEGANOMBRE
 *
 * The followings are the available model relations:
 * @property MateriaPrima[] $materiaPrimas
 * @property ProductoFinal[] $productoFinals
 */
class Bodega extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bodega';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BODEGANOMBRE', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BODEGA_ID, BODEGANOMBRE', 'safe', 'on'=>'search'),
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
			'materiaPrimas' => array(self::HAS_MANY, 'MateriaPrima', 'BODEGA_ID'),
			'productoFinals' => array(self::HAS_MANY, 'ProductoFinal', 'BODEGA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BODEGA_ID' => 'Bodega ID',
			'BODEGANOMBRE' => 'Nombre Bodega',
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

		$criteria->compare('BODEGA_ID',$this->BODEGA_ID);
		$criteria->compare('BODEGANOMBRE',$this->BODEGANOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bodega the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
