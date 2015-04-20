<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */

?>

<h1 align="center">Editar Registro Compras Producto final <?php echo $model->RPF_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'productos'=>$productos, 'prov'=>$prov)); ?>