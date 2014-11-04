<?php
/* @var $this TipoRolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Rols',
);

$this->menu=array(
	array('label'=>'Create TipoRol', 'url'=>array('create')),
	array('label'=>'Manage TipoRol', 'url'=>array('admin')),
);
?>

<h1>Tipo Rols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
