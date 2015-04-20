<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */

?>

<h1 align="center">Compras productos finales</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'productos'=>$productos, 'prov' => $prov)); ?>