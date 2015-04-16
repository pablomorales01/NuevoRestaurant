<?php
/* @var $this ComandaController */
/* @var $model Comanda */
$mesa =0;
//cero no repetido
$repetido =0;
?>

<h1 align="center">Administrar Comandas</h1>
<br>
<table >
	<tr>
		<th>Mesa</th>
		<th>Fecha</th>
		<th>Menu</th>
		<th>Cantidad</th>
		<th>Opciones</th>
	</tr>
	<?php foreach ($comandas as $com) {
		if($com->MESANUM != $mesa){
			$mesa = $com->MESANUM;
			$repetido =0;
			?>	
			<tr>
				<td><?php echo $mesa;?></td>
				<td><?php echo $com->COMFECHA;?></td>
		<?php } 
		else {?>
				<td></td>
				<td></td>
				<?php  
				$repetido = 1;
			}?>
			<?php $menu = ListaDePrecios::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT,
			'MENU_ID'=>$com->MENU_ID)); ?>
			<td><?php echo $menu->MENUNOMBRE;?></td>
			<td><?php echo $com->COM_CANTIDAD; ?></td>	
			<?php if($repetido == 0){ ?>
			<td>
			<div class="btn-group">
				<div class="input-group">
					<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-cog"></span>
					</button>

					<ul class="dropdown-menu pull-right">
						<li> 
							<a href="<?php echo Yii::app()->createUrl("comanda/update/$com->MESANUM"); ?>">Editar</a>
						</li>
						<li > 
							<li data-toggle="modal" data-target="#questionDelete<?php echo $com->MESANUM?>"><a>Eliminar</a></li>

						</li>
					</ul>
					
				</div> 
			</div>

			<div class="modal fade" id="questionDelete<?php echo $com->MESANUM?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<button type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::app()->createUrl("Comanda/delete/$com->MESANUM"); ?>'">Eliminar </button>
						</div>
					</div>
				</div>
			</div>
			</td>
			<?php } ?> <!-- END IF REPETIDO -->
			</tr> <!-- FILA -->
		<!-- END FOREACH -->
<?php }?>
	</table>