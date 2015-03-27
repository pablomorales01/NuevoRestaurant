<?php 
	$nombre = $_GET['nombre'];
	
	foreach ($resto as $resto) {
		// Si los nombres son iguales
		if($resto->RESTONOMBRE == $nombre)
		{
			echo 'Restaurant: '.$resto->RESTONOMBRE;
			echo '<br>Aqui va el Detalle de Restaurant: ';
			echo '<br> Fotografias: <br>';
			foreach ($imagen as $imagen) {
				// Si los id de restaurant son iguales
				if($imagen->RESTO_ID == $resto->RESTO_ID)
				{
					//MUESTRALO TODO MADAFAKA
					//CHtml::image(Yii::app()->baseUrl.'/images/subidas/'.$imagen->IMAGEN, 'imagen',array('width'=>200));
					?><img src="<?php echo Yii::app()->request->baseUrl.'/images/subidas/'.$imagen->IMAGEN; ?>" width="500" height="500">
				<?php  //echo '<br>';
				}
			}
			
		}

		
	}
?>