<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

?>

<h1 align="center">Administrar Menú</h1>

	<table>
		<tr>
		<?php 
		foreach ($LP as $lista) {
			//nombre del Meú
			//Precio
			//Personas?>
					<td><?php echo $lista->MENUNOMBRE; ?></td>
					<td><?php  echo $lista->MENUPRECIO;?></td>
					<td><?php echo $lista->MENUCANTIDADPERSONAS;?></td>
					<br>
			<?php 			
			foreach ($PP as $producto) {
				//PVENTA
				echo 'nombre de ventas';
			}
		}
		?>
		</tr>
	</table>

