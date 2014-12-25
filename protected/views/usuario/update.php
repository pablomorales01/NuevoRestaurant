<?php
/* @var $this UsuarioController */
/* @var $model Usuario */


$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'View Usuario', 'url'=>array('view', 'id'=>$model->USU_ID)),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1 align="center">Editar usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>