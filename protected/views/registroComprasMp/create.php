<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */

$this->breadcrumbs=array(
	'Registro Compras Mps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RegistroComprasMp', 'url'=>array('index')),
	array('label'=>'Manage RegistroComprasMp', 'url'=>array('admin')),
);
?>

<h1>Create RegistroComprasMp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>