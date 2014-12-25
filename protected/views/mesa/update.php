<?php
/* @var $this MesaController */
/* @var $model Mesa */
?>

<h1 align="center">Editar Mesa <?php echo $model->MESA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>