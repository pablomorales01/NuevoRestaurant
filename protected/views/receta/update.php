<?php
/* @var $this RecetaController */
/* @var $model Receta */
?>

<h1 align="center">Modificar Receta <?php echo $model->RECETA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>