<?php
/* @var $this BodegaController */
/* @var $model Bodega */
?>

<h1 align="center">Editar Bodega <?php echo $model->BODEGA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>