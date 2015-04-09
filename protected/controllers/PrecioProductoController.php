<?php

class PrecioProductoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/menulayout';

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
				'users'=>array('Administrador', 'cocina'),
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
		Yii::import('ext.multimodelform.MultiModelForm');

		$pv = Productos::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT));		
		$model = new PrecioProducto;
		$lp = new ListaDePrecios;
		//el total de calorias del menu
		$totalKcal=0;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['ListaDePrecios']))
		{
			//sumar todos los $_post de pp
			for ($i=0; $i < count($_POST['PrecioProducto']['PVENTA_ID']); $i++){
				$producto = $_POST['PrecioProducto']['PVENTA_ID'][$i];
				//si el producto es producto elaborado
				if(ProductoElaborado::model()->exists("PVENTA_ID ='".$producto."'"))
				{
					//busca por sql las calorias
					$calorias = ProductoElaborado::model()->findByAttributes(array('PVENTA_ID'=>$producto));
				}
				//si el producto es final
				elseif(ProductoFinal::model()->exists("PVENTA_ID = '".$producto."'"))
				{
					//busca por sql las calorias
					$calorias = ProductoFinal::model()->findByAttributes(array('PVENTA_ID'=>$producto));
				}
				//acumula y multiplica por la cantidad 
				$totalKcal = $totalKcal+($calorias->CALORIAS * $_POST['PrecioProducto']['PPCANTIDAD'][$i]); //falta multiplicar pero no se puede ACUMULAR
			}


			//GUARDAR POST DE LISTA DE PRECIOS
			$lp->attributes = $_POST['ListaDePrecios'];
			$lp->CALORIASTOTAL = $totalKcal;
			//RESTO ID DE LISTA DE PRECIOS
			$lp->RESTO_ID = Yii::app()->user->RESTAURANT;

			if($lp->save())
			{
				//$id = Yii::app()->db->getLastInsertID('ListaDePrecios');
				if(isset($_POST['PrecioProducto']))
				{
				for ($i=0; $i < count($_POST['PrecioProducto']['PVENTA_ID']); $i++) { 
						
						$model = new PrecioProducto;
						//MENU_ID
						$model->MENU_ID = $lp->MENU_ID;
						//$model->MENU_ID = $id;
						$model->PVENTA_ID = $_POST['PrecioProducto']['PVENTA_ID'][$i];
						$model->RESTO_ID= Yii::app()->user->RESTAURANT;
						$model->PPCANTIDAD= $_POST['PrecioProducto']['PPCANTIDAD'][$i];
						$model->save();
					}
				}
			}
			Yii::app()->user->setFlash('success', "Menú Ingresado!");
		}

		$this->render('create',array(
			'model'=>$model,
			'lp' => $lp,
			'pv' => $pv
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

		if(isset($_POST['PrecioProducto']))
		{
			$model->attributes=$_POST['PrecioProducto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PP_ID));
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
		$dataProvider=new CActiveDataProvider('PrecioProducto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		/*$model=new PrecioProducto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PrecioProducto']))
			$model->attributes=$_GET['PrecioProducto'];*/

		$PP = PrecioProducto::model()->findAllByAttributes(array('RESTO_ID'=> Yii::app()->user->RESTAURANT));
		$LP = ListaDePrecios::model()->findAllByAttributes(array('RESTO_ID'=> Yii::app()->user->RESTAURANT));
		$this->render('admin',array(
			//'model'=>$model,
			'PP' => $PP,
			'LP' => $LP,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PrecioProducto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PrecioProducto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PrecioProducto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='precio-producto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
