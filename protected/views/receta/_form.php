<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'receta-form',
  'enableAjaxValidation'=>false,
)); ?>

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<script language="javascript" type="text/javascript">
$(function()
{
    $("#add").click(function()
    {
        mover("origen", "destino");
    }); 
    
    $("#remove").click(function()
    {
        mover("destino","origen");
    });           
});

function mover(origen, destino)
{
    $("#" + origen + " option:selected").remove().appendTo("#" + destino);
}
</script>

<div class="col-xs-12 col-sm-6 col-md-4">Primero
	<table>
		<thead>
            <tr>
              <th>Materia Prima</th>
            </tr>
    	</thead>
        <td>
            <select id="origen" multiple="multiple" size="5">
             <?php foreach ($MP as $MP): ?>
             <option value="<?php $MP->MP_ID ?>"><?php echo $MP->MPNOMBRE ?></option>
             <?php  endforeach;?>
            </select>
            
        </td>
    </table>
</div>
<div class="col-xs-6 col-md-4">Botones
	<table>
        <td>
        	<div class="row buttons" align="center">
        	<!--<input type="button" id="add" value=">" /><br />-->
        	<?php echo BsHtml::Button('Agregar', array('id'=>'add', 'color' => BsHtml::BUTTON_COLOR_INFO));?><br></br>
        	<?php echo BsHtml::Button('Eliminar', array('id'=>'remove', 'color' => BsHtml::BUTTON_COLOR_DANGER));?>
        	<!--<input type="button" id="remove" value="<" />-->
        	</div>
    	</td>
    </table>
</div>
<div class="col-xs-6 col-md-4">Tercero
	<table width="200px">
		<thead>
            <tr>
              <th>Receta</th>
            </tr>
    	</thead>
		<td>
			<select id="destino" size="5">
                <!--<option value="<?php $MP->MP_ID ?>"></option>-->
    		</select>
    	</td>
    </table>
</div>

<div class="row buttons" align="right">
		<?php echo BsHtml::submitButton('Crear Receta', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
</div>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>