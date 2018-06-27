<?php include 'IPETrackingWS_wrapper.php'; 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php 
	
	if(isset($_GET["provincias"])){?>
		{
	    "query": "Unit",
	    "suggestions": [
		<?php
		$provincias = IPETrackingWEBBuscarProvincia_v2()->IPEProvincias->Provincia;
		$ultima = end($provincias);
		foreach ($provincias as $prov){ ?>
			 { "value": "<?php echo $prov->NombreProvincia; ?>", "data": "<?php echo $prov->CodigoProvincia ?>"}
			 <?php
			 	if($prov == $ultima) {
			 		echo "";
			 	}else{
			 		echo ",";
			 	}
			 ?>
		
		<?php } ?>
		 ]
		}
	<?php }
	if(isset($_GET["localidad"],$_GET["num"])){?>
	{
    "query": "Unit",
    "suggestions": [

		<?php
		$num = $_GET["num"];
		$localidad = IPETrackingWEBBuscarLocalidad_v2($num);
		$localidades = $localidad->IPELocalidades->Localidad;
		$ultima = end($localidades);
		foreach ($localidades as $loc){ ?>
			 { "value": "<?php echo $loc->NombreLocalidad; ?>", "data": "<?php echo $loc->CodigoLocalidad ?>"}
			  <?php
			 	if($loc == $ultima) {
			 		echo "";
			 	}else{
			 		echo ",";
			 	}
			 ?>
		<?php } ?>
	  ]
	}
	<?php }
	if(isset($_GET["agencia"],$_GET["agen_num"])){
		$agen_num = $_GET["agen_num"];
		$agencia = IPETrackingWEBBuscarAgencias_v2($agen_num)->IPEAgencias->MAgencia; 
		if(is_array($agencia)){ 
			//print_r($agencia);
			$ultima = end($agencia);
			?>

			{ "query":[

				<?php
				foreach ($agencia as &$agen) {?>
					{ "agencia":{
					    "codigo":"<?php echo $agen->CodigoAgencia; ?>",
						"nombre_agencia": "<?php echo $agen->NombreAgencia; ?>",
						"direccion": "<?php echo $agen->Direccion; ?>",
						"entrega_paquete":" <?php echo $agen->EntregaPaquetes; ?>",
						"latitud": "<?php echo $agen->LatitudAgencia; ?>",
						"longitud": "<?php echo $agen->LongitudAgencia; ?>",
						<?php if(isset($agen->Telefonos->string)){?>
						"Telefono": "<?php echo $agen->Telefonos->string; ?>"
						<?php }else{?>
						"Telefono": ""
						<?php }?>
					}}

				<?php 
					if($agen == $ultima) {
				 		echo "";
				 	}else{
				 		echo ",";
				 	}
					} 
				?>
			
			]}
		
		<?php }else{?>

		{ "query":{
			"codigo":"<?php echo $agencia->CodigoAgencia; ?>",
			"nombre_agencia": "<?php echo $agencia->NombreAgencia; ?>",
			"direccion": "<?php echo $agencia->Direccion; ?>",
			"entrega_paquete":" <?php echo $agencia->EntregaPaquetes; ?>",
			"latitud": "<?php echo $agencia->LatitudAgencia; ?>",
			"longitud": "<?php echo $agencia->LongitudAgencia; ?>"
		<?php
		if(isset($agencia->Horarios->MHorario)){ 
			if(is_array($agencia->Horarios->MHorario)){ ?>
				,"Apertura": "<?php echo $agencia->Horarios->MHorario[0]->Apertura; ?>",
				"Cierre": "<?php echo $agencia->Horarios->MHorario[0]->Cierre; ?>",
				"Lunes": "<?php echo $agencia->Horarios->MHorario[0]->Lunes; ?>",
				"Martes": "<?php echo $agencia->Horarios->MHorario[0]->Martes; ?>",
				"Miercoles": "<?php echo $agencia->Horarios->MHorario[0]->Miercoles; ?>",
				"Jueves": "<?php echo $agencia->Horarios->MHorario[0]->Jueves; ?>",
				"Viernes": "<?php echo $agencia->Horarios->MHorario[0]->Viernes; ?>",
				"Sábado": "<?php echo $agencia->Horarios->MHorario[0]->Sabado; ?>",
				"Domingo": "<?php echo $agencia->Horarios->MHorario[0]->Domingo; ?>",
				"Feriados": "<?php echo $agencia->Horarios->MHorario[0]->Feriados; ?>"
			
			<?php }else{ ?>

				,"Apertura": "<?php echo $agencia->Horarios->MHorario->Apertura; ?>",
				"Cierre": "<?php echo $agencia->Horarios->MHorario->Cierre; ?>",
				"Lunes": "<?php echo $agencia->Horarios->MHorario->Lunes; ?>",
				"Martes": "<?php echo $agencia->Horarios->MHorario->Martes; ?>",
				"Miercoles": "<?php echo $agencia->Horarios->MHorario->Miercoles; ?>",
				"Jueves": "<?php echo $agencia->Horarios->MHorario->Jueves; ?>",
				"Viernes": "<?php echo $agencia->Horarios->MHorario->Viernes; ?>",
				"Sábado": "<?php echo $agencia->Horarios->MHorario->Sabado; ?>",
				"Domingo": "<?php echo $agencia->Horarios->MHorario->Domingo; ?>",
				"Feriados": "<?php echo $agencia->Horarios->MHorario->Feriados; ?>"
			<?php } ?>
			
		
		<?php }; 
		if(isset($agencia->Telefonos->string)){
		?>

			,"Telefono":"<?php echo $agencia->Telefonos->string;?>"
		
		<?php }else{ ?>
		
		<?php } ?>
	}}
		<?php
		}
		}

	?>
  

