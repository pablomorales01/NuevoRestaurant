<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */


$this->menu=array(
	array('label'=>'List RegistroComprasPf', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasPf', 'url'=>array('create')),
	array('label'=>'View RegistroComprasPf', 'url'=>array('view', 'id'=>$model->RPF_ID)),
	array('label'=>'Manage RegistroComprasPf', 'url'=>array('admin')),
);
?>

<h1>Update RegistroComprasPf <?php echo $model->RPF_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>