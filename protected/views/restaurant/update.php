<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */

$this->breadcrumbs=array(
	'Restaurants'=>array('index'),
	$model->RESTO_ID=>array('view','id'=>$model->RESTO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Restaurant', 'url'=>array('index')),
	array('label'=>'Create Restaurant', 'url'=>array('create')),
	array('label'=>'View Restaurant', 'url'=>array('view', 'id'=>$model->RESTO_ID)),
	array('label'=>'Manage Restaurant', 'url'=>array('admin')),
);
?>

<h1>Update Restaurant <?php echo $model->RESTO_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>