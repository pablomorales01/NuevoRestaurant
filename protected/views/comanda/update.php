<?php
/* @var $this ComandaController */
/* @var $model Comanda */

$this->breadcrumbs=array(
	'Comandas'=>array('index'),
	$model->COM_ID=>array('view','id'=>$model->COM_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comanda', 'url'=>array('index')),
	array('label'=>'Create Comanda', 'url'=>array('create')),
	array('label'=>'View Comanda', 'url'=>array('view', 'id'=>$model->COM_ID)),
	array('label'=>'Manage Comanda', 'url'=>array('admin')),
);
?>

<h1>Update Comanda <?php echo $model->COM_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>