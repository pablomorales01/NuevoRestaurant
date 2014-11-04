<?php
/* @var $this MateriaPrimaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Materia Primas',
);

$this->menu=array(
	array('label'=>'Create MateriaPrima', 'url'=>array('create')),
	array('label'=>'Manage MateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Materia Primas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
