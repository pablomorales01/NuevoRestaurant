<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#usuario-grid').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');

");


?>
<h1>Administrar Usuarios</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>"table table-striped",
	'columns'=>array(
		//'USU_ID',
		//'RESTO_ID',
		//'rESTO.RESTONOMBRE',
		array(
		'name'=>'RESTO_ID',
		'value' => '$data->rESTO==null?" ":$data->rESTO->RESTONOMBRE',
		'filter'=>CHtml::listData(Restaurant::model()->findAll(),'RESTO_ID', 'RESTONOMBRE')
		),
		'USUROL',
		'USUPASSWORD',
		'USUCREATE',
		'USUNOMBRES',
		/*
		'USUAPELLIDOS',
		'USURUT',
		'USUTELEFONO',
		'USUESTADO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
