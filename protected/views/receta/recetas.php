<script type="text/javascript">
	$(function(){
	// Evento que selecciona la fila y la elimina 
	$(document).on("click",".eliminar",function(){
		var parent = $(this).parents().get(0);
		$(parent).remove();
	});
});

</script>

<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Unidad de Medida</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	<?php $i=0; foreach ($recetas as $row):?>
		<tr>
			<td><?php echo $i+1 ?></td>
			<td><input type="hidden" name="Recetas[<?php echo $i ?>][MP_ID]" value="<?php echo $row['MP_ID']?>" /><?php echo MateriaPrima::model()->findByPk($row['MP_ID'])->MPNOMBRE?></td>
			<td><input name="Recetas[<?php echo $i ?>][RECETACANTIDADPRODUCTO]" class="form-control" placeholder="Cantidad" type="number" value="<?php echo $row['RECETACANTIDADPRODUCTO']?>" required></td>
			<td><input name="Recetas[<?php echo $i ?>][RECETAUNIDADMEDIDA]" class="form-control" placeholder="Medida" type="text" value="<?php echo $row['RECETAUNIDADMEDIDA']?>" required></td>
			<td class="eliminar"><button class="btn btn-warning" name="yt0" type="button">x</button></td>
		</tr>
	<?php $i++; endforeach; ?>
	</tbody>
</table>