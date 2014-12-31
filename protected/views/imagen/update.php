<?php
/* @var $this ImagenController */
/* @var $model Imagen */

?>

<h1>Editar Imagen <?php echo $model->IMAGEN_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'resto'=>$resto)); ?>