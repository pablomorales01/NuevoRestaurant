<?php
/* @var $this ImagenController */
/* @var $model Imagen */

?>

<h1>Vista Imagen #<?php echo $model->IMAGEN_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IMAGEN_ID',
		'IMAGENNOMBRE',
		'IMAGENTIPO',
		array(
			'label' => 'Imagen',
			'type' => 'raw',
			'value' => CHtml::image(Yii::app()->baseUrl.'/images/subidas/'.$model->IMAGEN, 'imagen',array('width'=>200))),
	),
)); ?>
