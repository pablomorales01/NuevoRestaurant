<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

?>

<h1 align="center">Crear un Nuevo Usuario</h1>
<!-- Envia al formulario de creación de usuario -->
<?php $this->renderPartial('_form', array('model'=>$model,'roles'=>$roles)); ?>