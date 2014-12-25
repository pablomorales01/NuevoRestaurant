<?php
/* @var $this VentaController */
/* @var $model Venta */

?>

<h1 align="center">Editar Venta <?php echo $model->VENTA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>