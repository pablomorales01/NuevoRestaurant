<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->MENU_ID=>array('view','id'=>$model->MENU_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'View Menu', 'url'=>array('view', 'id'=>$model->MENU_ID)),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1>Update Menu <?php echo $model->MENU_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>