<?php

class VentaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/ventaLayout';

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
				'actions'=>array('admin','delete', 'crearVenta', 'promedios'),
				'users'=>array('Super administrador','Administrador','Cajero'),
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
		$mesas = Mesa::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT, 'ESTADO'=>'No disponible'));
		$mesa = new Mesa;
		$numero =0;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mesa']))
		{
			$numero = $_POST['Mesa']['MESANUM'];
			//$numero = Número de la mesa
			$this->redirect(array('crearVenta', 'numero'=>$numero));
		}

		$this->render('create',array(
			'mesas'=>$mesas, 'mesa'=>$mesa
		));
	}

	public function actionCrearVenta($numero){

		//$numero = Número de la mesa
		$model = new Venta;		

		$comanda = Comanda::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'MESANUM'=>$numero, 'VENTA_ID'=>null));

		$mesa = Mesa::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'ESTADO'=>'No disponible', 'MESANUM'=>$numero));

		$menu = ListaDePrecios::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT));
		$total=0;
		
		foreach ($comanda as $com) {
					$fila= ListaDePrecios::model()->findbyattributes(array('MENU_ID'=>$com->MENU_ID));
					$total = $total + $fila->MENUPRECIO;
				}		
					
		if(isset($_POST['Venta']))
		{
			/*	Guardar forma de pago desde el form,
			  	usuario id, venta fecha, venta total y resto_id 
			*/
			$model->USU_ID = Yii::app()->user->ID;
			$model->VENTAFECHA= new CDbExpression('NOW()');		
			$model->VENTATOTAL = $total;
			$model->RESTO_ID = Yii::app()->user->RESTAURANT;
			$model->attributes=$_POST['Venta'];
			if($model->save())
			{
				$this->redirect('admin');
			}
		}

		$this->render('crearVenta',array(
			'model'=>$model, 
			'comanda'=>$comanda,
			'mesa' => $mesa,
			'menu'=>$menu,
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

		if(isset($_POST['Venta']))
		{
			$model->attributes=$_POST['Venta'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->VENTA_ID));
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
		$dataProvider=new CActiveDataProvider('Venta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Venta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Venta']))
			$model->attributes=$_GET['Venta'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Venta the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Venta::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionPromedios()
	{
		$model = new PrecioPromedio('search');
		$model->unsetAttributes();
		if(isset($_GET['PrecioPromedio']))
			$model->attributes=$_GET['PrecioPromedio'];

		$this->render('promedios', array('model'=>$model, ));
	}

	/**
	 * Performs the AJAX validation.
	 * @param Venta $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='venta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
