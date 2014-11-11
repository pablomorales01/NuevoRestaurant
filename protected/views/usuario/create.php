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
?>

<h1 align="center">Crear un Nuevo Usuario</h1>
<!-- Envia al formulario de creación de usuario -->
<?php $this->renderPartial('_form', array('model'=>$model, 'roles'=>$roles)); ?>