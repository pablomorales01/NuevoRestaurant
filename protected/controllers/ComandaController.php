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
		$comandas = Comanda::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'MESANUM'=>$id));

		$model = new Comanda;
		$mesas = Mesa::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'ESTADO'=>'Disponible'));
		$menus = ListaDePrecios::model()->findAllByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT));
		$cantidad = 0;
		$mx=0;
		$MESA =0;

		if(isset($_POST['Comanda']))
		{
			//primero revisar si los post estan repetidos, si es asi sumar
			//SI INGRESA POST REPETIDOS
			for ($i=0; $i < count($_POST['Comanda']['MENU_ID']); $i++){
				for ($j=$i+1; $j < count($_POST['Comanda']['MENU_ID']); $j++){
					$cantidad=0;
					if($_POST['Comanda']['MENU_ID'][$i] == $_POST['Comanda']['MENU_ID'][$j])
					{
						$cantidad = $_POST['Comanda']['COM_CANTIDAD'][$j];
						$_POST['Comanda']['COM_CANTIDAD'][$i] += $cantidad;
						/*unset($_POST['Comanda']['MENU_ID'][$j]);
						unset($_POST['Comanda']['COM_CANTIDAD'][$j]);*/
						$_POST['Comanda']['MENU_ID'][$j]= null;
						$_POST['Comanda']['COM_CANTIDAD'][$j]= null;					

					}
				}
			}
			
			//si se eliminó un meni_id
			foreach ($comandas as $com) { //por cada precio producto en la bd...
					$ban =0;
					for ($i=0; $i < count($_POST['Comanda']['MENU_ID']); $i++) { //verifico si existe en post
						if($com->MENU_ID == $_POST['Comanda']['MENU_ID'][$i]){
							$ban = 1;
						}
					}
					if($ban == 0){
					 //ELIMINA SI NO ESTA
					$aux =Comanda::model()->deleteAllByAttributes(array('COM_ID'=>$com->COM_ID));
					}	
			}

			$ban =0;
			//EDITAR O AÑADIR
			for ($i=0; $i < count($_POST['Comanda']['MENU_ID']); $i++){
				$ban=0;
				foreach ($comandas as $com) {
					$MESA = $com->MESANUM;
					//LA MESA
					if($_POST['Comanda']['MESANUM'] != $com->MESANUM)
					{
						$mx = $com->MESANUM;
						//mesa anterior
						$m = Mesa::model()->findByAttributes(array('MESANUM'=>$com->MESANUM));
						//cambio de  estado
						$m->ESTADO = 'Disponible';
						$m->save();
						//cambio de mesas
						$com->MESANUM = $_POST['Comanda']['MESANUM'];
						$com->save();
						//mesa nueva
						$aux_m = Mesa::model()->findByAttributes(array('MESANUM'=>$mx));
						//cambio de estado mesa nueva
						$aux_m->ESTADO = 'No disponible';
						$aux_m->save();
					}
					//LA CANTIDAD DE MENUS
					if($_POST['Comanda']['MENU_ID'][$i] == $com->MENU_ID 
						&& $_POST['Comanda']['COM_CANTIDAD'][$i] != $com->COM_CANTIDAD){
							
							$aux = Comanda::model()->findByAttributes(array('COM_ID'=>$com->COM_ID));
							$aux->COM_CANTIDAD = $_POST['Comanda']['COM_CANTIDAD'][$i];
							$aux->save();
						
						$ban = 1;
					}
				}

				//bandera es cero no existe en la bd
				if($ban == 0){
					$nuevo = new Comanda;
					$nuevo->RESTO_ID = Yii::app()->user->RESTAURANT;
					$nuevo->USU_ID = Yii::app()->user->ID;
					$nuevo->COMFECHA = new CDbExpression('NOW()');
					$nuevo->MENU_ID = $_POST['Comanda']['MENU_ID'][$i];
					$nuevo->MESANUM = $MESA;
					$nuevo->COM_ESTADO = 'Enviada';
					$nuevo->COM_CANTIDAD = $_POST['Comanda']['COM_CANTIDAD'][$i];
					
					$nuevo->save();
					
				}
			}

			$this->redirect(array('admin'));
		}
		$this->render('editar',array(
			'model'=>$model, 'comandas'=>$comandas,
			'mesas'=>$mesas, 'menus'=>$menus
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		
		$comandas = Comanda::model()->deleteAllByAttributes(
			array('MESANUM'=>$id, 'RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'ESTADO'=>'Enviada'));


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
