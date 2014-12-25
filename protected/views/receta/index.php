<?php
/* @var $this RecetaController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1 align="center">Recetas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
