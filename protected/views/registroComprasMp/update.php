<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */
?>

<h1 align="center">Editar Registro de Compras Materia Prima <?php echo $model->RCMP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'prov'=>$prov, 'productos'=>$productos)); ?>