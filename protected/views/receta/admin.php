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
 <tr>
  <td>
    <th>Producto elaborado</th>
    <th>Ingrediente</th>
    <th>Cantidad</th>
    <th>Medida</th>
    <th>Opciones</th>
   </td>
</tr>
    	<?php foreach ($pe as $key) {  ?> 

    	<td>
    	<?php  
    		$ID = $key->PVENTA_ID;
    		$numero = Receta::model()->countByAttributes(array('PVENTA_ID'=>$ID));
    	?>

		</td>
    	<?php  } ?>    		
    
  

 
</table> 