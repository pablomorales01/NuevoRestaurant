<?php
/* @var $this RecetaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recetas',
);

$this->menu=array(
	array('label'=>'Create Receta', 'url'=>array('create')),
	array('label'=>'Manage Receta', 'url'=>array('admin')),
);
?>

<h1>Recetas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
