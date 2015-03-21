<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */


$this->menu=array(
	array('label'=>'List RegistroComprasMp', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasMp', 'url'=>array('create')),
	array('label'=>'View RegistroComprasMp', 'url'=>array('view', 'id'=>$model->RCMP_ID)),
	array('label'=>'Manage RegistroComprasMp', 'url'=>array('admin')),
);
?>

<h1>Update RegistroComprasMp <?php echo $model->RCMP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'prov'=>$prov, 'productos'=>$productos)); ?>