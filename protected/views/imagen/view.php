<?php
/* @var $this ImagenController */
/* @var $model Imagen */

?>

<h1>Vista Imagen #<?php echo $model->IMAGEN_ID; ?></h1>

<?php if($model->IMAGEN!="" && !is_null($model->IMAGEN)){
	echo "<p>".CHtml::image(Yii::app()->request->baseUrl.'/protected/images/subidas/'.$model->IMAGEN,"imagen",array("width"=>200, "height"=>200))."</p>";
	}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IMAGEN_ID',
		'IMAGENNOMBRE',
		'IMAGEN',
		'IMAGENTIPO'
	),
)); ?>
