<?php

class ComandaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/comandaLayout';

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
				'users'=>array('Administrador','Caja', 'Garzón'),
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
	public function actionView($id, $Total)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id), 'Total'=>$Total));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Comanda;
		$mesas = Mesa::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT, 
													'ESTADO'=>"Disponible"));
		$menus = ListaDePrecios::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT));
		$cantidad = 0;

	
		//sumar los precio para total $menu->MENUPRECIO
		$Total = 0;
		if(isset($_POST['Comanda']))
		{
			//SI INGRESA POST REPETIDOS
			for ($i=0; $i < count($_POST['Comanda']['MENU_ID']); $i++){
				for ($j=$i+1; $j < count($_POST['Comanda']['MENU_ID']); $j++){
					$cantidad=0;
					if($_POST['Comanda']['MENU_ID'][$i] == $_POST['Comanda']['MENU_ID'][$j])
					{
						$cantidad = $_POST['Comanda']['COM_CANTIDAD'][$j];
						$_POST['Comanda']['COM_CANTIDAD'][$i] += $cantidad;
						unset($_POST['Comanda']['MENU_ID'][$j]);

					}
			}
		}

			
			for ($i=0; $i < count($_POST['Comanda']['MENU_ID']); $i++){
				$model = new Comanda;
				$model->MENU_ID = $_POST['Comanda']['MENU_ID'][$i];
				foreach ($menus as $menu) {
					if($model->MENU_ID == $menu->MENU_ID) //SI SON IGUALES LOS MENÚ
					{
						$Total = $Total + $menu->MENUPRECIO;
					}
				}
				$model->USU_ID = Yii::app()->user->ID;
				$model->MESANUM = $_POST['Comanda']['MESANUM'];
				$model->COMFECHA = new CDbExpression('NOW()');
				$model->COM_ESTADO = 'Enviada';
				$model->COM_CANTIDAD = $_POST['Comanda']['COM_CANTIDAD'][$i];
				$model->RESTO_ID = Yii::app()->user->RESTAURANT;
				$model->save();
			}

			$mesa = Mesa::model()->findByAttributes(array('MESANUM'=>$model->MESANUM));
			$mesa->ESTADO = 'No disponible';
			$mesa->save();

			
			if($model->save())
				$this->redirect(array('view','id'=>$model->COM_ID, 'Total'=>$Total));
		}

		$this->render('create',array(
			'model'=>$model, 'mesas'=>$mesas, 'menus'=>$menus
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

		if(isset($_POST['Comanda']))
		{
			$model->attributes=$_POST['Comanda'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->COM_ID));
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
		$dataProvider=new CActiveDataProvider('Comanda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$comandas = Comanda::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'COM_ESTADO'=>'Enviada'));

		$this->render('admin',array(
		'comandas'=>$comandas
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Comanda the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Comanda::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Comanda $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='comanda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
