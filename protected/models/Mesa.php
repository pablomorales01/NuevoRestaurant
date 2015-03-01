<?php

/**
 * This is the model class for table "mesa".
 *
 * The followings are the available columns in table 'mesa':
 * @property integer $MESA_ID
 * @property integer $MESACANTIDADPERSONA
 * @property integer $MESANUM
 * @property integer $RESTO_ID
 */
class Mesa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mesa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MESANUM, MESACANTIDADPERSONA', 'required'),
			array('MESACANTIDADPERSONA, MESANUM, RESTO_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MESA_ID, MESACANTIDADPERSONA, MESANUM, RESTO_ID', 'safe', 'on'=>'search'),
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
			'MESA_ID' => 'Mesa id',
			'MESACANTIDADPERSONA' => 'Cantidad de personas',
			'MESANUM' => 'Número',
			'RESTO_ID' => 'Restaurant',
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

		$criteria->compare('MESA_ID',$this->MESA_ID);
		$criteria->compare('MESACANTIDADPERSONA',$this->MESACANTIDADPERSONA);
		$criteria->compare('MESANUM',$this->MESANUM);
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
	 * @return Mesa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
