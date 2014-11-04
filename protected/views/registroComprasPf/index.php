<?php
/* @var $this RegistroComprasPfController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registro Compras Pfs',
);

$this->menu=array(
	array('label'=>'Create RegistroComprasPf', 'url'=>array('create')),
	array('label'=>'Manage RegistroComprasPf', 'url'=>array('admin')),
);
?>

<h1>Registro Compras Pfs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
