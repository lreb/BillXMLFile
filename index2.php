<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>NetFact SA de CV</h1>


	<?php

	$archivo = 'ejemplo2.xml'; 
	if (file_exists($archivo)) { 

	  $xml = simplexml_load_file($archivo);  
	  if($xml){ 
	  	//imprime nodos
	    print_r($xml);
	    //print_r("<br>");
	    //print_r("<br>");
	    //print_r($xml['serie']);
	    echo "<br>";
	    echo "<br>";
	    echo $xml->Emisor->attributes()->nombre;
	    //echo $xml->attributes()->version; 
	    echo "<br>";
	    //echo $xml->attributes()->serie; 
	    echo "<br>";
	    
	    //echo $fFolio;
	    echo "<br>";
	    
	    //echo $fFecha;
	    //echo "<br>";
	    //echo $xml->attributes()->sello; 
	    //echo $xmlData['total'];


	    /*foreach ($xml->Comprobante->Emisor as $attr) {  
	      //$item = $attr->rfc; 
	      //echo $item;

	    } */

	    $fFolio = $xml->attributes()->folio; 
	    $fFecha= $xml->attributes()->fecha;

	  } else echo "Sintaxi del XML inválida"; 

	} else echo "Error al abrir el xml";  

	?>
	
	<div class="row">
		<div class="col-md-2"><!--izqierda--></div>
		<div class="col-md-8">

			<div class="row">
				<div class="col-md-3">imagen</div>
				<div class="col-md-6">
					
					nombre
					<br>
					pais, estado, municipio 
					<br>
					colonia, calle, numero, cp
					<br>
					actividad - rfc

				</div>
				<div class="row">
					<div class="col-md-3">
						
						<?php echo $fFecha; ?>
						<br>
						<?php echo $fFolio; ?>

					</div>
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-7">
					nombre receptor
					<br>
					pais, estado, municipio
					<br>
					colonia, calle, numero, cp
					<br>
					rfc
				</div>
				<div class="col-md-5">
					forma pago
					<br>
					no. certificado
				</div>
			</div>
			<br>
			<!--conceptos-->
			<div class="row">
				<div class="col-md-12">
					<table>
						<thead>
							<tr>
								<td>noIdentificacion</td>
								<td>descripcion</td>
								<td>valorUnitario</td>
								<td>cantidad</td>
								<td>importe</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12</td>
								<td>descripcion de algo</td>
								<td>10</td>
								<td>5</td>
								<td>50</td>
							</tr>

							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>
									IVA 16%
									<br>
									total
								</td>
								<td>
									<br>
									
									50
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!--sellos-->
			<div class="row">
				<div class="col-md-12">
					/S+hvNjdUwz4dnetrus4knJn7ntK/mFxcAY1HbWSoMLwU3PwegK96iocKqCdj1OnB95Sus278cpaGXw3E=
				</div>
			</div>

		</div>
		<div class="col-md-2"><!--derecha--></div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>