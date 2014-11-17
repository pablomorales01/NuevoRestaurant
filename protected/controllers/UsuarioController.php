<?php

class UsuarioController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/usuarioLayout';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl' // perform access control for CRUD operations
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
			array('allow', // Permite a los usuarios autenticados ...
				'actions'=>array('create','update','view'),
				'users'=>array('@'),
			),
			array('allow', // Permite al administrador
				'actions'=>array('admin','delete','update','view', 'asignar'),
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

	public function actionAsignar($id)
	{
		$restos= Restaurant::model()->findAll();
		//$model =Usuario::model()->findByPk('USU_ID'=$id);

		$model = $this->loadModel($id);
		if($restos == null)
		$model->delete();
		else {
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->USU_ID));
		}
		}
		$this->render('asignar', array('restos'=>$restos, 'model'=>$model));
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$roles = TipoRol::model()->findAll();		
		$model = new Usuario;
		
		// Uncomment the following line if AJAX validation is needed
	    
		$this->performAjaxValidation($model);
		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			$model->USUCREATE = date('Y-m-d');

			if($model->save()){
					//$this->redirect(array('view','id'=>$model->USU_ID));
					if($model->ROL_ID != '1') $this->redirect(array('asignar', 'id'=>$model->USU_ID));
					else $this->redirect(array('view','id'=>$model->USU_ID));
			}		

		}	

		$this->render('create',array('model'=>$model,'roles'=>$roles));
	}

	public function generador($longitud, $letras_min, $letras_may, $numeros, $simbolos)
	{
		//generador(6,true,true,false);

		$variacaracteres = $letras_min?'abcdefghijklmnopqrstuvwxyz':''; //si es verdadero letras : si es falso nada.
		$variacaracteres .= $letras_may?'ABCDEFGHIJKLMNOPQRSTUVWXYX':'';
		$variacaracteres .= $numeros?'1234567890':'';
		$variacaracteres .= $simbolos?'!#%&=¨*?/':'';

		$i=0;
		$clave= '';
		while($i < $longitud)
		{
			$numrad = rand(0, strlen($variacaracteres)-1);
			$clave .= substr($variacaracteres, $numrad, 1);
			$i++;
		}

		return $clave;
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$roles = TipoRol::model()->findAll();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->USU_ID));
		}

		$this->render('update',array(
			'model'=>$model, 'roles'=>$roles
		));
	}

	public function actionLogin()
	{
		$model=new LoginForm;//lamada al modelo LoginForm
		//Validacion Mediante Ajax
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		//Ingreso de Datos via Post
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			//Se valida que los datos cumplan con las reglas exigidas y carga la variables de session puestas en useridentity
			if($model->validate() && $model->login())
					$this->redirect(Yii::app()->user->returnUrl);
		}
		//Carga Su propia Layout
		//$this->layout='LoginLayout';
		$this->render('admin',array('model'=>$model));
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
		$dataProvider=new CActiveDataProvider('Usuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	

	/**
	 * Performs the AJAX validation.
	 * @param Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
