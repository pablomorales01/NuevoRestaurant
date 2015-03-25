<?php

class RegistroComprasMpController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/proveedorLayout';

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
				'users'=>array('Administrador'),
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
		$model=new RegistroComprasMp;
		$prov = Proveedor::model()->findAllByAttributes(
			array('RESTO_ID' => Yii::app()->user->RESTAURANT));
		$productos = MateriaPrima::model()->findAllByAttributes(
			array('RESTO_ID' => Yii::app()->user->RESTAURANT));


		if(isset($_POST['RegistroComprasMp']))
		{
			$model->attributes=$_POST['RegistroComprasMp'];
			//guardo el restaurant
			$model->RESTO_ID = Yii::app()->user->RESTAURANT;			
			if($model->save())
				$this->redirect(array('view','id'=>$model->RCMP_ID));
		}

		$this->render('create',array(
			'model'=>$model, 'prov'=>$prov, 'productos' => $productos
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$prov = Proveedor::model()->findAllByAttributes(
			array('RESTO_ID' => Yii::app()->user->RESTAURANT));
		$productos = MateriaPrima::model()->findAllByAttributes(
			array('RESTO_ID' => Yii::app()->user->RESTAURANT));

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RegistroComprasMp']))
		{
			$model->attributes=$_POST['RegistroComprasMp'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->RCMP_ID));
		}

		$this->render('update',array(
			'model'=>$model, 'prov'=>$prov, 'productos'=>$productos
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
		$dataProvider=new CActiveDataProvider('RegistroComprasMp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RegistroComprasMp('search');
		
		if(isset($_GET["excel"]))
		{
			$compras = RegistroComprasMp::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT));
			$content=$this->renderPartial("excel", array("compras"=>$compras), true);
			Yii::app()->request->sendFile("compras MP.xls", $content);
		}
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RegistroComprasMp']))
			$model->attributes=$_GET['RegistroComprasMp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RegistroComprasMp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RegistroComprasMp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RegistroComprasMp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registro-compras-mp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
