<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

$ban=0;
?>

<h1 align="center">Administrar Menú</h1>
<?php if($LP == null){
	echo '<h4> No se encuentran registros. </h4>';
	} 
	else{ ?>

	<table>
	<tr>
		<th>Nombre</th>
		<th>Precio</th>
		<th># Personas</th>
		<th>Calorias</th>
		<th>Productos</th>
		<th>Cantidad</th>
		<th>Opciones</th>
	</tr>
		<?php 
		foreach ($LP as $lista) { //menu uno por uno
			//nombre del Meú
			//Precio
			//Personas?>
			<tr>	<td><?php echo $lista->MENUNOMBRE; ?></td>
					<td><?php  echo $lista->MENUPRECIO;?></td>
					<td><?php echo $lista->MENUCANTIDADPERSONAS;?></td>
					<td><?php echo $lista->CALORIASTOTAL;?></td>

					<?php foreach ($PP as $precio) { //precio producto
						$producto = ProductoVenta::model()->findByAttributes(array('PVENTA_ID'=>$precio->PVENTA_ID));
						if($lista->MENU_ID == $precio->MENU_ID){ //cuando esten en el mismo menu
						?><td><?php echo $producto->PVENTANOMBRE;?></td>
						<td><?php echo $precio->PPCANTIDAD;?></td>
						 <td><?php  
							if($ban==0)
							{?>
							<div class="btn-group">
				              <div class="input-group">
				                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
				                  <span class="glyphicon glyphicon-cog"></span>
				                </button>

				                <ul class="dropdown-menu pull-right">
				                  <li> 
				                    <a href="<?php echo Yii::app()->createUrl("PrecioProducto/update/$lista->MENU_ID"); ?>">Editar</a>
				                  </li>
				                  <li data-toggle="modal" data-target="#questionDelete<?php echo $lista->MENU_ID?>"><a>Eliminar</a></li>
				
				                </ul>
				               
				              </div> 
				            </div>

						            <div class="modal fade" id="questionDelete<?php echo $lista->MENU_ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		            <button type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::app()->createUrl("PrecioProducto/delete/$lista->MENU_ID"); ?>'">Eliminar </button>
		          </div>
		        </div>
		      </div>
		    </div>

					<?php $ban = 1;	}?></td>
					<?php  }?>
					<tr></tr><td></td><td></td><td></td><td></td>
					<?php } ?> 
			</tr>
		<?php $ban=0; }
		?>

	</table>
	<?php } ?>