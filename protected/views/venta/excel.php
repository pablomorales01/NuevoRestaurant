<table>
	<tr>
		<th>N° Venta</th>
		<th>Nombres</th>
		<th>Apellidos</th>	
		<th>Fecha</th>
		<th>Total</th>
		<th>Forma de Pago</th>
	</tr>
	<?php foreach ($ventas as $data):?>
		<tr>
			<td><?php echo $data->VENTA_ID?></td>
			<td><?php echo $data->uSU->USUNOMBRES?></td>
			<td><?php echo $data->uSU->USUAPELLIDOS?></td>
			<td><?php echo $data->VENTAFECHA?></td>
			<td><?php echo $data->VENTATOTAL?></td>
			<td><?php echo $data->VENTAFORMADEPAGO?></td>
		</tr>
	<?php endforeach; ?>
</table>