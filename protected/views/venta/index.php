<?php
/* @var $this VentaController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1 align="center">Ventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
