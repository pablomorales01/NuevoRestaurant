<?php

class ProductoFinalController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/producto_finalLayout';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('Super administrador'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		//donde van los datos por $_POST
		$model=new ProductoFinal;
	
		//si existen bodegas se crea
		$bodega = Bodega::model()->findAll();
		$pv = new ProductoVenta;
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);



		if(isset($_POST['ProductoFinal']))
		{		
			//recibo en model los datos por $_POST
			$model->attributes=$_POST['ProductoFinal'];

			$pv->PVENTANOMBRE = $model->attributes;
			if($pv->save)
			{
				$id = Yii::app()->db->getLastInsertID('ProductoVenta'); 
				$model->PVENTA_ID = $id;
				if($model->save())
					$this->redirect(array('view','id'=>$model->PVENTA_ID));
			}

		}

		$this->render('create',array('model'=>$model, 'bodega'=>$bodega));
	}

	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$bodega = Bodega::model()->findAll();

		$pv = ProductoVenta::model()->findByPk($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductoFinal']))
		{
			$model->attributes=$_POST['ProductoFinal'];

			$pv->PVENTA_ID = $model->PVENTA_ID;
			$pv->PVENTANOMBRE ='fuck';

			if($model->save())
			{
				if($pv->save())
					$this->redirect(array('view','id'=>$model->PVENTA_ID));
			}	
		}

		$this->render('update',array(
			'model'=>$model, 'bodega'=>$bodega,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ProductoFinal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ProductoFinal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductoFinal']))
			$model->attributes=$_GET['ProductoFinal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ProductoFinal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ProductoFinal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ProductoFinal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-final-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
