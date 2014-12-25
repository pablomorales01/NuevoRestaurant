<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
