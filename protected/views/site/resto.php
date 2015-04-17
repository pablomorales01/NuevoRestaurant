<style type="text/css">
	
		.izquierda{
			float: left;

		}

		.derecha{
			float: left;
			width: 700px;
			margin-left: 40px;
		}
	
</style>
<div class="izquierda">
<?php 
	$nombre = $_GET['nombre'];
	
	foreach ($resto as $rest) {
		// Si los nombres son iguales
		if($rest->RESTONOMBRE == $nombre)
		{
			echo '<b>Restaurant: '.$rest->RESTONOMBRE.'</b>';
			echo '<br><b>Aqui va el Detalle de Restaurant: '.$rest->RESTODETALLE.'</b>';
			echo '<br> Fotografias: <br>';
			foreach ($imagen as $imagen) {
				// Si los id de restaurant son iguales
				if($imagen->RESTO_ID == $rest->RESTO_ID)
				{
					//MUESTRALO TODO MADAFAKA
					//CHtml::image(Yii::app()->baseUrl.'/images/subidas/'.$imagen->IMAGEN, 'imagen',array('width'=>200));
					?><img src="<?php echo Yii::app()->request->baseUrl.'/images/subidas/'.$imagen->IMAGEN; ?>" width="300" height="300">
				<?php  echo '<br>';
				}
			}
			$menu = ListaDePrecios::model()->findAllByAttributes(array('RESTO_ID'=>$rest->RESTO_ID));
			?>
			</div>
			<div class="derecha">
			<?php
				$this->beginWidget('bootstrap.widgets.BsPanel', array(
					'title' => 'Lista de Precios'));
				?>
				
				
			<table>
				<tr>
					<th>Menú</th>
					<th>Calorias</th>
					<th>Precio</th>
				</tr>
			<?php 
			foreach ($menu as $lista) {?>
				<tr>
							<td><?php echo $lista->MENUNOMBRE?></td>
							<td><?php echo $lista->CALORIASTOTAL?></td>
							<td><?php echo $lista->MENUPRECIO?></td>
				</tr>
			<?php }?>
			</table>
			<?php
				$this->endWidget();
				?>
			</div>
		<?php }
	}?>


		

	