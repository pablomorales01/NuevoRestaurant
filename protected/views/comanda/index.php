<?php
/* @var $this ComandaController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1 align="center">Comandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
