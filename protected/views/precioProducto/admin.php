<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

$ban=0;
?>

<h1 align="center">Administrar Menú</h1>

	<table>
	<tr>
		<th>Nombre</th>
		<th>Precio</th>
		<th># Personas</th>
		<th>Calorias</th>
		<th>Productos</th>
		<th>Opciones</th>
	</tr>
		<?php 
		foreach ($LP as $lista) {
			//nombre del Meú
			//Precio
			//Personas?>
			<tr>	<td><?php echo $lista->MENUNOMBRE; ?></td>
					<td><?php  echo $lista->MENUPRECIO;?></td>
					<td><?php echo $lista->MENUCANTIDADPERSONAS;?></td>
					<td><?php echo $lista->CALORIASTOTAL;?></td>
					<?php foreach ($PP as $precio) {
						$producto = ProductoVenta::model()->findByAttributes(array('PVENTA_ID'=>$precio->PVENTA_ID));
						if($lista->MENU_ID == $precio->MENU_ID){
						?><td> <?php  echo $producto->PVENTANOMBRE;?></td>
						<?php ?><td><?php  
							if($ban==0)
							{?>
							<div class="btn-group">
				              <div class="input-group">
				                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
				                  <span class="glyphicon glyphicon-cog"></span>
				                </button>

				                <ul class="dropdown-menu pull-right">
				                  <li> 
				                    <a href="<?php echo Yii::app()->createUrl(""); ?>">Editar</a>
				                  </li>
				                  <li> 
				                    <a href="<?php echo Yii::app()->createUrl("");?>
				                    ">Eliminar</a>
				                  </li>
				                </ul>
				               
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