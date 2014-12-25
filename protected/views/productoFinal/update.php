<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

?>

<h1 align="center">Editar Producto Final <?php echo $model->PVENTA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'bodega'=>$bodega)); ?>