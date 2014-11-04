<?php
/* @var $this RegistroComprasMpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registro Compras Mps',
);

$this->menu=array(
	array('label'=>'Create RegistroComprasMp', 'url'=>array('create')),
	array('label'=>'Manage RegistroComprasMp', 'url'=>array('admin')),
);
?>

<h1>Registro Compras Mps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
