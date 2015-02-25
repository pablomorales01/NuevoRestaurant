<?php

class BodegaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/bodegaLayout';

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
				'actions'=>array('admin','delete', 'productos','redirigir'),
				'users'=>array('Super administrador', 'Administrador','bodega'),
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
		$model=new Bodega;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bodega']))
		{
			$model->attributes=$_POST['Bodega'];
			//INGRESO EL ID DEL RESTAURANT
			$model->RESTO_ID = Yii::app()->user->RESTAURANT;
			if($model->save())
				$this->redirect(array('view','id'=>$model->BODEGA_ID));
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bodega']))
		{
			$model->attributes=$_POST['Bodega'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->BODEGA_ID));
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
		$dataProvider=new CActiveDataProvider('Bodega');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		
		$model=new Bodega('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Bodega']))
			$model->attributes=$_GET['Bodega'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionProductos()
	{
		$model =new EnBodega('search');
		$model->unsetAttributes();
		if(isset($_GET['EnBodega']))
			$model->attributes = $GET['EnBodega'];
		
		$this->render('productos', array(
			'model'=>$model,));
	}

	public function actionRedirigir($id,$producto,$tipo,$accion)
	{
		switch ($accion) {
			case 'editar':
					switch ($tipo) {
						case 'MATERIA PRIMA':
						$this->redirect(array('materiaPrima/update','id'=>$id));	
							break;
						case 'PRODUCTO FINAL':
						$this->redirect(array('productoFinal/update','id'=>$id));
							break;						
						default:
							break;
					}
				break;
		    case 'ver':
					switch ($tipo) {
						case 'MATERIA PRIMA':
						$this->redirect(array('materiaPrima/view','id'=>$id));	
							break;
						case 'PRODUCTO FINAL':
						$this->redirect(array('productoFinal/view','id'=>$id));
							break;
						default:
							break;
					}
				break;
			case 'eliminar':
					switch ($tipo) {
						case 'MATERIA PRIMA':
						$this->redirect(array('materiaPrima/delete', 'id'=>$id));
							break;
						case 'PRODUCTO FINAL':
						$this->redirect(array('materiaPrima/delete','id'=>$id));
						    break;
						default:
							# code...
							break;
					}
				break;			
			default:
				break;
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Bodega the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Bodega::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Bodega $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='bodega-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
