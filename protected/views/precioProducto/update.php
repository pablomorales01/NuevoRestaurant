<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */


$this->menu=array(
	array('label'=>'List PrecioProducto', 'url'=>array('index')),
	array('label'=>'Create PrecioProducto', 'url'=>array('create')),
	//array('label'=>'View PrecioProducto', 'url'=>array('view', 'id'=>$model->PP_ID)),
	array('label'=>'Manage PrecioProducto', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model, 'lp'=>$lp, 'pps'=>$pps, 'pv'=>$pv)); ?>