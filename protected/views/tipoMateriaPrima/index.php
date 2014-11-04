<?php
/* @var $this TipoMateriaPrimaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Materia Primas',
);

$this->menu=array(
	array('label'=>'Create TipoMateriaPrima', 'url'=>array('create')),
	array('label'=>'Manage TipoMateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Tipo Materia Primas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
