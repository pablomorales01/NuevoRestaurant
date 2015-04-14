<?php
/* @var $this ComandaController */
/* @var $model Comanda */

?>

<h1 align="center">Nueva comanda <?php 
	$nombre= Restaurant::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT ));
	echo $nombre->RESTONOMBRE?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'mesas'=>$mesas, 'menus'=>$menus)); ?>