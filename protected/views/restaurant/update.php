<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */

$this->menu=array(
	array('label'=>'List Restaurant', 'url'=>array('index')),
	array('label'=>'Create Restaurant', 'url'=>array('create')),
	array('label'=>'View Restaurant', 'url'=>array('view', 'id'=>$model->RESTO_ID)),
	array('label'=>'Manage Restaurant', 'url'=>array('admin')),
);
?>

<h1 align="center">Editar Restaurant <?php echo $model->RESTO_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>