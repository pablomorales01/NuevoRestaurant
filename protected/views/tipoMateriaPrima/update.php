<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

?>

<h1 align="center">Editar Tipo de Materia Prima <?php echo $model->TMP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>