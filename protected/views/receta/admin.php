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

$ban = 0;
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
                if($ban == 0){?>

             <div class="btn-group">
              <div class="input-group">
                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-cog"></span>
                </button>

                <ul class="dropdown-menu pull-right">
                  <li> 
                    <a href="<?php echo Yii::app()->createUrl("receta/update/$re->PVENTA_ID"); ?>">Editar</a>
                  </li>
                  <li > 
                    <li data-toggle="modal" data-target="#questionDelete<?php echo $key->PVENTA_ID?>"><a>Eliminar</a></li>

                  </li>
                </ul>
               
              </div> 
            </div>

            <div class="modal fade" id="questionDelete<?php echo $key->PVENTA_ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Eliminar</h4>
          </div>
          <div class="modal-body">
            ¿Desea realmente eliminar?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::app()->createUrl("receta/delete/$key->PVENTA_ID"); ?>'">Eliminar </button>
          </div>
        </div>
      </div>
    </div>

                <?php $ban = 1; 
            }?>
                </td>
                    <tr></tr><td></td><td></td><td></td> 
             <?php  }
        } ?> 	  
    </tr>
  <?php $ban = 0; } ?>
</table> 
<?php $this->endWidget(); ?>