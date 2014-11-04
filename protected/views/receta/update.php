<?php
/* @var $this RecetaController */
/* @var $model Receta */

$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	$model->RECETA_ID=>array('view','id'=>$model->RECETA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Receta', 'url'=>array('index')),
	array('label'=>'Create Receta', 'url'=>array('create')),
	array('label'=>'View Receta', 'url'=>array('view', 'id'=>$model->RECETA_ID)),
	array('label'=>'Manage Receta', 'url'=>array('admin')),
);
?>

<h1>Update Receta <?php echo $model->RECETA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>