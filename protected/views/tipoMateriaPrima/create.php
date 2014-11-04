<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

$this->breadcrumbs=array(
	'Tipo Materia Primas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoMateriaPrima', 'url'=>array('index')),
	array('label'=>'Manage TipoMateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Create TipoMateriaPrima</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>