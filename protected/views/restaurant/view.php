<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */

$this->breadcrumbs=array(
	'Restaurants'=>array('index'),
	$model->RESTO_ID,
);

$this->menu=array(
	array('label'=>'List Restaurant', 'url'=>array('index')),
	array('label'=>'Create Restaurant', 'url'=>array('create')),
	array('label'=>'Update Restaurant', 'url'=>array('update', 'id'=>$model->RESTO_ID)),
	array('label'=>'Delete Restaurant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RESTO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Restaurant', 'url'=>array('admin')),
);
?>

<h1>View Restaurant #<?php echo $model->RESTO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RESTO_ID',
		'RESTONOMBRE',
		'RESTOFECHACREACION',
	),
)); ?>
