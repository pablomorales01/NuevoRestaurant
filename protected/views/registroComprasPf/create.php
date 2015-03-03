<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */


$this->menu=array(
	array('label'=>'List RegistroComprasPf', 'url'=>array('index')),
	array('label'=>'Manage RegistroComprasPf', 'url'=>array('admin')),
);
?>

<h1 align="center">Compras productos finales</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'productos'=>$productos, 'prov' => $prov)); ?>