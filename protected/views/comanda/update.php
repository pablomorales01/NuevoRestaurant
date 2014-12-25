<?php
/* @var $this ComandaController */
/* @var $model Comanda */

?>

<h1 align="center">Editar Comanda <?php echo $model->COM_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>