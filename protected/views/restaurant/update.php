<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */

?>

<h1 align="center">Editar Restaurant <?php echo $model->RESTO_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>