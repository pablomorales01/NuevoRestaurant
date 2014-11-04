<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */

$this->breadcrumbs=array(
	'Registro Compras Pfs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RegistroComprasPf', 'url'=>array('index')),
	array('label'=>'Manage RegistroComprasPf', 'url'=>array('admin')),
);
?>

<h1>Create RegistroComprasPf</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>