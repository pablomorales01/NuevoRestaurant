<?php
/* @var $this RecetaController */
/* @var $model Receta */

?>

<h1 align="center">Administrar preparaciones</h1>

<!--</*?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'receta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pVENTA.PVENTANOMBRE',
		'MP_ID',
		'RECETACANTIDADPRODUCTO',
		'RECETAUNIDADMEDIDA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>*/-->

<br></br>
 <table style="width:90%">
  <td>
    <th>Producto elaborado</th>
    <th>Ingrediente</th>
    <th>Cantidad</th>
    <th>Medida</th>
    <th>Opciones</th>
    <td>
    	<?php foreach ($pe as $key) { 
    		

    	}?>      		
    </td>
  </td>

 
</table> 