<?php

/**
 * This is the model class for table "imagen".
 *
 * The followings are the available columns in table 'imagen':
 * @property integer $IMAGEN_ID
 * @property integer $RESTO_ID
 * @property string $IMAGENNOMBRE
 * @property string $IMAGEN
 * @property string $IMAGENTIPO
 *
 * The followings are the available model relations:
 * @property Restaurant $rESTO
 */
class Imagen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RESTO_ID', 'required'),
			array('RESTO_ID', 'numerical', 'integerOnly'=>true),
			array('IMAGENNOMBRE', 'length', 'max'=>50),
			array('IMAGEN', 'file', 
        			'types'=>'jpg, gif, png, bmp, jpeg',
            		'maxSize'=>1024 * 1024 * 10, // 10MB
                	'tooLarge'=>'10MB.', //comentario de maximo de largo
            		'allowEmpty' => true,
            		'on' => 'insert, update'
         	),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IMAGEN_ID, RESTO_ID, IMAGENNOMBRE, IMAGEN', 'safe', 'on'=>'search'),
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
			'rESTO' => array(self::BELONGS_TO, 'Restaurant', 'RESTO_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IMAGEN_ID' => 'Imagen',
			'RESTO_ID' => 'Resto',
			'IMAGENNOMBRE' => 'Imagennombre',
			'IMAGEN' => 'Imagen',
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

		$criteria->compare('IMAGEN_ID',$this->IMAGEN_ID);
		$criteria->compare('RESTO_ID',$this->RESTO_ID);
		$criteria->compare('IMAGENNOMBRE',$this->IMAGENNOMBRE,true);
		$criteria->compare('IMAGEN',$this->IMAGEN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
