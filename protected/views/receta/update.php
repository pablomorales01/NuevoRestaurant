<?php
/* @var $this RecetaController */
/* @var $model Receta */
?>

<h1 align="center">Editar Receta <?php echo $model->RECETA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'MP'=>$MP)); ?>