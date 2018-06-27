<?php
	session_start();
	//if($_POST['captcha'] != $_SESSION['captcha'])
	if(!$_POST['captcha'])
	{
?>
	<div class="alert alert-danger">
			<p>Has completado incorrectamente el CÓDIGO VERIFICADOR, por favor completalo de la manera correcta.<p/>
		</div>
		<p class="text-center"><input class="btn btn-warning btn-lg" type="button" onclick="$('.tracking_result').empty();focusToTop('#tracking-left');" value="LIMPIAR RESULTADOS"></p>
<?php
		exit();
	}
	
	include_once('IPETrackingWS_wrapper.php');
	
	$agecod = $_POST["agecod"];
	$tipfor = $_POST["tipfor"];
	$guinro = $_POST["guinro"];

	/*$agecod = 6001;
	$tipfor = "A";
	$guinro = 1;*/
	$consulta = IPETrackingBuscarGuia_v2($agecod,$tipfor,$guinro);
	
	if($consulta->Historial->Movimientos != null)
	{
		$tmp = (array) $consulta->Historial->Movimientos;
		if(!empty($tmp))// chequeamos que este stdclass contenga movimientos antes de asignarlos
		{
			$movimientos = $consulta->Historial->Movimientos->Movimiento;
		}
		else
		{
			$movimientos = null;
		}
	}
	
	
	if($consulta == null)
	{
?>
		<blockquote class="blockquote">
		  No hemos encontrado resultados para la guia número <b><?php echo $consulta->Estado->Guia ?></b>.<br/>
		  Por favor consulte más tarde o verifique estar escribiendo los datos correctos.
		</blockquote>
		<p class="text-center"><input class="btn btn-warning btn-lg" type="button" onclick="$('.tracking_result').empty();focusToTop('#tracking-left');" value="LIMPIAR RESULTADOS"></p>
<?php
		exit(); //no se continua con el script porque no hay datos
	}
?>
	<blockquote class="blockquote">
	  <p class="mb-0">Guia: <b><?php echo $consulta->Estado->Guia ?></p>
	  <p class="mb-0">Estado: <?php echo $consulta->Estado->Estado ?></p>
	</blockquote>
	<br>
	<br>
<?php
	if($movimientos != null)
	{
		if(count($movimientos) > 0)
		{
?>
			<table class="table table-bordered table-striped">
				<thead>
				  <tr>
					<th>Localidad</th>
					<!-- <th>Sucursal</th> -->
					<th>Movimiento</th>
					<th>Fecha</th>
					<th>Hora</th>
				  </tr>
				</thead>
				<tbody>
				  <?php
					if(count($movimientos) == 1)
					{
						//si trae un solo registro se ve en otra forma
						echo '<tr>';
						echo '<td>'.$movimientos->Localidad.'</td>';
						//echo '<td>'.$movimientos->Sucursal.'</td>';
						echo '<td>'.$movimientos->Evento.'</td>';
						echo '<td>'.$movimientos->Fecha.'</td>';
						echo '<td>'.$movimientos->Hora.'</td>';
						echo '</tr>';
					}
					else
					{
						foreach($movimientos as $m)
						{
							echo '<tr>';
							echo '<td>'.$m->Localidad.'</td>';
							//echo '<td>'.$m->Sucursal.'</td>';
							echo '<td>'.$m->Evento.'</td>';
							echo '<td>'.$m->Fecha.'</td>';
							echo '<td>'.$m->Hora.'</td>';
							echo '</tr>';
						}
					}
					?>
				</tbody>
			</table>
	<?php
		}
		else
		{
	?>
			<div class="alert alert-info">
				<b>No se encontraron movimientos para la guia número: <b><?php echo $consulta->Estado->Guia ?></b>
			</div>
	<?php
		}
	}
	else
	{
	?>
			<div class="alert alert-danger">
				<p>No hemos encontrado resultados para la guia número <b><?php echo $consulta->Estado->Guia ?></b>.
				<br/>
				Por favor consulte más tarde o verifique estar escribiendo los datos correctos.<p/>
			</div>
	<?php
	}
	?>
<br/>
<p class="text-center"><input class="btn btn-warning btn-lg" type="button" onclick="$('.tracking_result').empty();focusToTop('#tracking-left');" value="LIMPIAR RESULTADOS"></p>