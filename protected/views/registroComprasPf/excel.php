<table>
	<tr>
		<th>ID REGISTRO</th>
		<th>PRODUCTO</th>
		<th>CANTIDAD</th>	
		<th>PROVEEDOR</th>
		<th>PRECIO</th>
		<th>FECHA</th>
	</tr>
	<?php foreach ($compras as $data):?>
		<tr>
			<td><?php echo $data->RPF_ID?></td>
			<td><?php echo $data->pVENTA->PVENTANOMBRE?></td>
			<td><?php echo $data->RPFPCANTIDAD?></td>
			<td><?php echo $data->pROV->PROVNOMBRE?></td>
			<td><?php echo $data->RPFPRECIO_COMPRA?></td>
			<td><?php echo $data->RVTASFECHA?></td>
		</tr>
	<?php endforeach; ?>
</table>