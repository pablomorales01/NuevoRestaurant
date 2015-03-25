<table>
	<tr>
		<th>ID REGISTRO</th>
		<th>MATERIA PRIMA</th>
		<th>CANTIDAD</th>	
		<th>PROVEEDOR</th>
		<th>PRECIO</th>
		<th>FECHA</th>
	</tr>
	<?php foreach ($compras as $data):?>
		<tr>
			<td><?php echo $data->RCMP_ID?></td>
			<td><?php echo $data->mP->MPNOMBRE?></td>
			<td><?php echo $data->RCMPCANTIDAD?></td>
			<td><?php echo $data->pROV->PROVNOMBRE?></td>
			<td><?php echo $data->RCMPPRECIO_COMPRA?></td>
			<td><?php echo $data->RCMPFECHA?></td>
		</tr>
	<?php endforeach; ?>
</table>