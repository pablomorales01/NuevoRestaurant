<?php

class RecetaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/recetaLayout';

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
				'actions'=>array('admin','delete', 'update'),
				'users'=>array('Administrador', 'cocina'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	/*
	public function actionAdd()
	{
	
		$recetas=array();
		//Agregar Valores de Tabla si es que existen
		if(isset($_POST['Recetas']))$recetas+=$_POST['Recetas'];
		//agrega el valor de select a la cabezera del arreglo
		array_unshift($recetas,array(
			'MP_ID'=>$_POST['Receta']['MP_ID'],
			'RECETACANTIDADPRODUCTO'=>"",
			'RECETAUNIDADMEDIDA'=>""
			));
		//var_dump($recetas);
		$this->renderPartial('recetas',array('recetas'=>$recetas));
	}
	*/
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

		$model = new Receta;
		$PE = new ProductoElaborado;
		$MP = MateriaPrima::model()->findAll();

		//para crear un PE necessito crear un Producto de venta
		$pv = new ProductoVenta;

		$validatedMembers = array();  //garantiza matriz vacia

		if(isset($_POST['Receta']))
		{

			$PE->attributes = $_POST['ProductoElaborado'];
			$PE->RESTO_ID = Yii::app()->user->RESTAURANT;

			$pv->PVENTANOMBRE = $PE->PVENTANOMBRE;
			$pv->RESTO_ID = 0;
			$pv->RESTO_ID = Yii::app()->user->RESTAURANT;

			if($pv->save())
			{
				$id = Yii::app()->db->getLastInsertID('ProductoVenta'); //guarde el id
				$PE->PVENTA_ID = $id;


				if($PE->save())
				{

					for ($i=0; $i < count($_POST['Receta']['MP_ID']); $i++) { 
						$model = new Receta;
						$model->PVENTA_ID = $id;
						$model->MP_ID = $_POST['Receta']['MP_ID'][$i];
						$model->RECETACANTIDADPRODUCTO = $_POST['Receta']['RECETACANTIDADPRODUCTO'][$i];
						$model->RECETAUNIDADMEDIDA = $_POST['Receta']['RECETAUNIDADMEDIDA'][$i];
						$model->RESTO_ID= Yii::app()->user->RESTAURANT;
						$model->save();
					}
				} //save del producto elaborado

			} //$pv->save o producto de venta.
			
		}

		$this->render('create',array('model'=>$model, 'PE'=>$PE, 'MP'=>$MP));

	}



	
	/*
	public function actionCrear(){
		$model=new Receta;
		$recetas=array();
		$this->render('crearReceta',array(
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
		//Yii::import('ext.multimodelform.MultiModelForm');

		//$PE = new ProductoElaborado;
		$MP = MateriaPrima::model()->findAll();

		$PE = ProductoElaborado::model()->findByAttributes(array('PVENTA_ID'=>$id));

		$recetas = Receta::model()->findAllByAttributes(array('PVENTA_ID'=>$id));
		$pv = ProductoVenta::model()->findByAttributes(array('PVENTA_ID'=>$id));

		if(isset($_POST['Receta']))
		{

			$PE->attributes = $_POST['ProductoElaborado'];
			//$PE->RESTO_ID = Yii::app()->user->RESTAURANT;
			$pv->PVENTANOMBRE = $PE->PVENTANOMBRE;
			//$pv->RESTO_ID = 0;
			//$pv->RESTO_ID = Yii::app()->user->RESTAURANT;

			if($pv->save())
			{
				//$id = Yii::app()->db->getLastInsertID('ProductoVenta'); //guarde el id
				//$PE->PVENTA_ID = $id;


				if($PE->save())
				{

					/*for ($i=0; $i < count($_POST['Receta']['MP_ID']); $i++) { 
						$model = new Receta;
						$model->PVENTA_ID = $id;
						$model->MP_ID = $_POST['Receta']['MP_ID'][$i];
						$model->RECETACANTIDADPRODUCTO = $_POST['Receta']['RECETACANTIDADPRODUCTO'][$i];
						$model->RECETAUNIDADMEDIDA = $_POST['Receta']['RECETAUNIDADMEDIDA'][$i];
						$model->RESTO_ID= Yii::app()->user->RESTAURANT;
						$model->save();
					}*/
				} //save del producto elaborado

			} //$pv->save o producto de venta.
		}

		
		$this->render('editar',array('recetas'=>$recetas,'MP'=>$MP,'PE'=>$PE, 'pv'=>$pv));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

		$this->loadModel($id)->delete();
		$pe = ProductoElaborado::model()->findAllByAttributes(array('PVENTA_ID'=>$id));
		$pe->delete();
		$pv = ProductoVenta::model()->findAllByAttributes(array('PVENTA_ID'=>$id));
		$pv->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Receta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		//$model=new Receta('search');
		//$model->unsetAttributes();  // clear any default values
		//if(isset($_GET['Receta']))
			//$model->attributes=$_GET['Receta'];
		$receta = Receta::model()->findAllByAttributes(array('RESTO_ID'=> Yii::app()->user->RESTAURANT));
		$pe = ProductoElaborado::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT));

		$this->render('admin',array(
			'receta'=>$receta, 'pe'=>$pe,
		));		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Receta the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		//$model=Receta::model()->findByPk($id);
		$model = Receta::model()->findAllByAttributes(array('PVENTA_ID'=>$id));

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Receta $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='receta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
