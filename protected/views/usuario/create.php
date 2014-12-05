<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

//Sub-Menú
$this->menu=array(
	array('label'=>'Lista Usuario', 'url'=>array('index')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#Usuario_USUNOMBRES').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#Usuario_USUAPELLIDOS').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#Usuario_USURUT').validCampoFranz(' k1234567890-');
  $('#Usuario_USUTELEFONO').validCampoFranz(' 1234567890');

");

?>

<h1 align="center">Crear un Nuevo Usuario</h1>
<!-- Envia al formulario de creación de usuario -->
<?php $this->renderPartial('_form', array('model'=>$model,'roles'=>$roles)); ?>