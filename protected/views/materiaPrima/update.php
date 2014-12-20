<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */

$this->breadcrumbs=array(
	'Materia Primas'=>array('index'),
	$model->MP_ID=>array('view','id'=>$model->MP_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MateriaPrima', 'url'=>array('index')),
	array('label'=>'Create MateriaPrima', 'url'=>array('create')),
	array('label'=>'View MateriaPrima', 'url'=>array('view', 'id'=>$model->MP_ID)),
	array('label'=>'Manage MateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Editar materia prima</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'bodega'=>$bodega, 'TMP'=>$TMP)); ?>