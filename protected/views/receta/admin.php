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
<?php $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<br>
 <table style="width:90%">
 <tr>
    <th>Producto elaborado</th>
    <TH>Calorías</TH>
    <th>Gramos</th>
    <th>Ingrediente</th>
    <th>Cantidad</th>
    <th>Medida</th>
    <th>Opciones</th>
</tr>
    <?php foreach ($pe as $key) {  ?> <!--producto elaborado -->
    <tr>
    	<td><?php echo $key->PVENTANOMBRE ?></td>
        <td><?php echo $key->CALORIAS ?></td>
        <td><?php echo $key->GRAMOS ?></td> 
        <?php foreach ($receta as $re) { //receta
            if($re->PVENTA_ID == $key->PVENTA_ID)
                {
                    //para obetener la fila que necesito de materia prima
                    $mp = MateriaPrima::model()->findByAttributes(array('MP_ID'=>$re->MP_ID)); ?>                 
                    <td> <?php echo $mp->MPNOMBRE; ?> </td>
                    <td><?php echo $re->RECETACANTIDADPRODUCTO; ?></td>
                    <td><?php echo $re->RECETAUNIDADMEDIDA; ?></td>
                    <td> <?php
                          //boton de opciones  que deberia por cada p elab
                echo BsHtml::buttonDropdown('Opciones', array(
                    array(
                        'label' => 'Modificar',
                        'url' => 'update/receta'
                    ),
                    array(
                        'label' => 'Eliminar',
                        'url' => '#'
                    ),
                    array(
                    'split' => true,
                    'size' => BsHtml::BUTTON_SIZE_SMALL,
                    'color' => BsHtml::BUTTON_COLOR_INFO
                )));
                
?></td>
                    <tr></tr><td></td><td></td><td></td> 
             <?php  }
        } ?> 	
       
    </tr>
  <?php } ?>

 
</table> 
<?php $this->endWidget(); ?>