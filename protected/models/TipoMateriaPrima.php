<?php

/**
 * This is the model class for table "tipo_materia_prima".
 *
 * The followings are the available columns in table 'tipo_materia_prima':
 * @property integer $TMP_ID
 * @property string $TMPNOMBRE
 *
 * The followings are the available model relations:
 * @property MateriaPrima[] $materiaPrimas
 */
class TipoMateriaPrima extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_materia_prima';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TMPNOMBRE', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TMP_ID, TMPNOMBRE', 'safe', 'on'=>'search'),
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
			'materiaPrimas' => array(self::HAS_MANY, 'MateriaPrima', 'TMP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TMP_ID' => 'Id',
			'TMPNOMBRE' => 'Nombre',
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

		$criteria->compare('TMP_ID',$this->TMP_ID);
		$criteria->compare('TMPNOMBRE',$this->TMPNOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoMateriaPrima the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
