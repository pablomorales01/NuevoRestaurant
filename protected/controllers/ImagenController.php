<?php

class ImagenController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/imagenLayout';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('admin','delete', 'loadImage'),
				'users'=>array('Super Administrador'),
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
		 $connection = Yii::app()->db;
		 $model = new Imagen();
		 $resto = Restaurant::model()->findAll();
        // VARIABLES PARA EL GUARDADO DE LA IMAGEN
              $rnd = rand(0,99999);  // generate random number between 0-9999
        // OTRAS ACCIONES
        if (! isset($_POST['Imagen'])) {
            $this->render('create', array('model' => $model, 'resto'=>$resto));
            return;
        }
        if (isset($_POST['Imagen']['IMAGEN_ID']) && $_POST['Imagen']['IMAGEN_ID'] == "0") $_POST['Imagen']['IMAGEN_ID'] = null;
        // GUARDAR FOTO
        $uploadedFile=CUploadedFile::getInstance($model,'IMAGEN');
        $fileName = "";
        // SI SE CARGO
        $uploadTemporal = "{$uploadedFile}";
        if(strlen($uploadTemporal) != 0)
        {
            $fileName = "{$rnd}-{$uploadedFile}";
        } 
        $model->IMAGEN = $fileName;
        $model->setAttributes($_POST['Imagen']);
            // OTRAS ACCIONES
        $transaction = $connection->beginTransaction();
        try {
            if ($model->save()) {
                // OTRAS ACCIONES
                // IMAGEN
                $uploadedFile->saveAs(Yii::app()->basePath.'/images/subidas'.$fileName);  // la imagen se subirá a la carpeta raiz /images/moviles/
                $transaction->commit();
                // OTRAS ACCIONES
            } else {
                Yii::app()->user->setFlash('error', "Error intentando crear el movil");
                $transaction->rollback();
            }
        } catch (Exception $e) {
            $transaction->rollback();
            throw $e;
        }
        $this->render('create', array('model' => $model, 'resto'=>$resto));

		/*$model=new Imagen;
		$resto = Restaurant::model()->findAll();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imagen']))
		{
			$model->attributes=$_POST['Imagen'];
			//$model->IMAGEN = CUploadedFile::getInstance($model, 'IMAGEN'); //equivalente a Yii PHP de Array $ _FILES

			if($model->save())
				//$model->avatar->saveAs('/images/subidas'); //guarda el archivo fisico en el servidor ('destino')
				$this->redirect(array('view','id'=>$model->IMAGEN_ID));
		}

		$this->render('create',array(
			'model'=>$model, 'resto'=>$resto,
		));*/
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	
	/*public function actionloadImage($id)
	    {
	        $model=$this->loadModel($id);
	        header('Content-Type: ' . $model->IMAGENTIPO);
	        print $model->IMAGEN;

	        $this->renderPartial('image', array(
            'model'=>$model
        ));
	    }*/

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imagen']))
		{
			$model->attributes=$_POST['Imagen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IMAGEN_ID));
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
		//$this->loadModel($id)->delete();
		unlink(Yii::app()->basePath.'/images/subidas/'.$model->IMAGEN);
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Imagen');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Imagen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imagen']))
			$model->attributes=$_GET['Imagen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Imagen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Imagen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Imagen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='imagen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
