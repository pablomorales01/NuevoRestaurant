<?php

/**
 * This is the model class for table "mesa".
 *
 * The followings are the available columns in table 'mesa':
 * @property integer $RESTO_ID
 * @property integer $MESANUM
 * @property integer $MESAPERSONAS
 * @property string $ESTADO
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
			array('RESTO_ID, MESANUM, MESAPERSONAS, ESTADO', 'required'),
			array('RESTO_ID, MESANUM, MESAPERSONAS', 'numerical', 'integerOnly'=>true),
			array('MESANUM', 'validarCantidad'),
			array('ESTADO', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RESTO_ID, MESANUM, MESAPERSONAS, ESTADO', 'safe', 'on'=>'search'),
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
			'RESTO_ID' => 'Resto',
			'MESANUM' => 'N° Mesa',
			'MESAPERSONAS' => '# Personas',
			'ESTADO' => 'Estado',
		);
	}
	public function validarCantidad(){
		if($this->MESANUM < 1){
			$this->addError('MESANUM', 'El número mínimo de una mesa es #1.');
		}
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

		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('MESANUM',$this->MESANUM);
		$criteria->compare('MESAPERSONAS',$this->MESAPERSONAS);
		$criteria->compare('ESTADO',$this->ESTADO,true);
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
