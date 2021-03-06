<?php

class ProductoVentaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/productoVentaLayout';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
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
				'users'=>array('Super administrador','Administrador'),
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

	public function actionAsignar()
	{
		$select = null;

		if(isset($_POST['listname']))
		{
			$select = $_POST['listname'];
			if($select == 'PRODUCTO ELABORADO')
				$this->redirect(array('productoElaborado/create', 'select'=>$select));
			if($select == 'PRODUCTO FINAL')
				$this->redirect(array('productoFinal/create', 'select'=>$select));	
		}
		
		$this->render('asignar', array('select'=>$select));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	/*public function actionCreate($select)
	{
		$model=new ProductoVenta;

		var_dum($select);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['ProductoVenta']))
		{
			$model->attributes=$_POST['ProductoVenta'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PVENTA_ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}*/

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductoVenta']))
		{
			$model->attributes=$_POST['ProductoVenta'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PVENTA_ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */

	//preguntar si el producto es final o elaborado
	public function actionDelete($id, $tipo)
	{
		$this->loadModel($id)->delete();

		if($tipo == 'PRODUCTO FINAL')
			$this->redirect(array('productoFinal/delete','id'=>$id));

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ProductoVenta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ProductoVenta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductoVenta']))
			$model->attributes=$_GET['ProductoVenta'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ProductoVenta the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ProductoVenta::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ProductoVenta $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-venta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
