Ver original
<?php
$xml = simplexml_load_file('xml/ejemplo2.xml'); 
$ns = $xml->getNamespaces(true);
$xml->registerXPathNamespace('c', $ns['cfdi']);
$xml->registerXPathNamespace('t', $ns['tfd']);
 
 
//EMPIEZO A LEER LA INFORMACION DEL CFDI E IMPRIMIRLA 
foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){ 
      /*echo $cfdiComprobante['version']; 
      echo "<br />"; 
      echo $cfdiComprobante['fecha']; 
      echo "<br />"; 
      echo $cfdiComprobante['sello']; 
      echo "<br />"; 
      echo $cfdiComprobante['total']; 
      echo "<br />"; 
      echo $cfdiComprobante['subTotal']; 
      echo "<br />"; 
      echo $cfdiComprobante['certificado']; 
      echo "<br />"; 
      echo $cfdiComprobante['formaDePago']; 
      echo "<br />"; 
      echo $cfdiComprobante['noCertificado']; 
      echo "<br />"; 
      echo $cfdiComprobante['tipoDeComprobante']; 
      echo "<br />"; */
      $cVersion = $cfdiComprobante['version']; 
      $cFecha = $cfdiComprobante['fecha'];
      $cSello = $cfdiComprobante['sello'];
      $cTotal = $cfdiComprobante['total'];
      $cSubTotal = $cfdiComprobante['subTotal']; 
      $cCertificado = $cfdiComprobante['certificado']; 
      $cFormaDePago = $cfdiComprobante['formaDePago'];
      $cNoCertificado = $cfdiComprobante['noCertificado'];
      $cTipoDeComprobante = $cfdiComprobante['tipoDeComprobante'];
      $cFolio = $cfdiComprobante['folio'];
} 
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){ 
   /*echo $Emisor['rfc']; 
   echo "<br />"; 
   echo $Emisor['nombre']; 
   echo "<br />"; */
   $eRfc = $Emisor['rfc'];
   $eNombre = $Emisor['nombre']; 
} 
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor//cfdi:DomicilioFiscal') as $DomicilioFiscal){ 
   /*echo $DomicilioFiscal['pais']; 
   echo "<br />"; 
   echo $DomicilioFiscal['calle']; 
   echo "<br />"; 
   echo $DomicilioFiscal['estado']; 
   echo "<br />"; 
   echo $DomicilioFiscal['colonia']; 
   echo "<br />"; 
   echo $DomicilioFiscal['municipio']; 
   echo "<br />"; 
   echo $DomicilioFiscal['noExterior']; 
   echo "<br />"; 
   echo $DomicilioFiscal['codigoPostal']; 
   echo "<br />"; */
   $ePais = $DomicilioFiscal['pais']; 
   $eCalle = $DomicilioFiscal['calle']; 
   $eEstado = $DomicilioFiscal['estado']; 
   $eColonia =  $DomicilioFiscal['colonia'];
   $eMunicipio = $DomicilioFiscal['municipio'];
   $eNoExterior = $DomicilioFiscal['noExterior']; 
   $eCodigoPostal = $DomicilioFiscal['codigoPostal']; 
} 

foreach ($xml->xpath('//cfdi:Comprobante//cfdi:RegimenFiscal') as $RegimenFiscal){ 
   /*echo $RegimenFiscal['Regimen']; 
   echo "<br />"; */
   $eRegimenFiscal = $RegimenFiscal['Regimen']; 
} 


foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor//cfdi:ExpedidoEn') as $ExpedidoEn){ 
   /*echo $ExpedidoEn['pais']; 
   echo "<br />"; 
   echo $ExpedidoEn['calle']; 
   echo "<br />"; 
   echo $ExpedidoEn['estado']; 
   echo "<br />"; 
   echo $ExpedidoEn['colonia']; 
   echo "<br />"; 
   echo $ExpedidoEn['noExterior']; 
   echo "<br />"; 
   echo $ExpedidoEn['codigoPostal']; 
   echo "<br />"; */
   $cePais = $ExpedidoEn['pais'];
   $ceCalle = $ExpedidoEn['calle'];
   $ceEstado = $ExpedidoEn['estado']; 
   $ceColonia = $ExpedidoEn['colonia'];
   $ceNoExterior = $ExpedidoEn['noExterior'];
   $ceCodigoPostal = $ExpedidoEn['codigoPostal']; 
} 


foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor){ 
   /*echo $Receptor['rfc']; 
   echo "<br />"; 
   echo $Receptor['nombre']; 
   echo "<br />"; */
   $rRfc = $Receptor['rfc']; 
   $rNombre = $Receptor['nombre']; 
} 
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor//cfdi:Domicilio') as $ReceptorDomicilio){ 
   /*echo $ReceptorDomicilio['pais']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['calle']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['estado']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['colonia']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['municipio']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['noExterior']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['noInterior']; 
   echo "<br />"; 
   echo $ReceptorDomicilio['codigoPostal']; 
   echo "<br />"; */
   $rPais = $ReceptorDomicilio['pais'];
   $rCalle = $ReceptorDomicilio['calle'];
   $rEstado = $ReceptorDomicilio['estado']; 
   $rColonia = $ReceptorDomicilio['colonia'];
   $rMunicipio = $ReceptorDomicilio['municipio'];
   $rNoExterior = $ReceptorDomicilio['noExterior']; 
   $rNoInterior = $ReceptorDomicilio['noInterior']; 
   $rCodigoPostal = $ReceptorDomicilio['codigoPostal']; 
} 
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){ 
   /*echo "<br />"; 
   echo $Concepto['unidad']; 
   echo "<br />"; 
   echo $Concepto['importe']; 
   echo "<br />"; 
   echo $Concepto['cantidad']; 
   echo "<br />"; 
   echo $Concepto['descripcion']; 
   echo "<br />"; 
   echo $Concepto['valorUnitario']; 
   echo "<br />";   
   echo "<br />"; */
} 
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $Traslado){ 
   /*echo $Traslado['tasa']; 
   echo "<br />"; 
   echo $Traslado['importe']; 
   echo "<br />"; 
   echo $Traslado['impuesto']; 
   echo "<br />";   */
   $iTasa = $Traslado['tasa'];
   $iImporte = $Traslado['importe'];
   $iImpuesto = $Traslado['impuesto'];
} 
 
//ESTA ULTIMA PARTE ES LA QUE GENERABA EL ERROR
foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
   echo $tfd['selloCFD']; 
   echo "<br />"; 
   echo $tfd['FechaTimbrado']; 
   echo "<br />"; 
   echo $tfd['UUID']; 
   echo "<br />"; 
   echo $tfd['noCertificadoSAT']; 
   echo "<br />"; 
   echo $tfd['version']; 
   echo "<br />"; 
   echo $tfd['selloSAT']; 
} 
?>
 

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



	
	<div class="row">
		<div class="col-md-2"><!--izqierda--></div>
		<div class="col-md-8">

			<div class="row">
				<div class="col-md-3">imagen</div>
				<div class="col-md-6">
					
					<?php echo $eNombre; ?>
					<br>
					<?php echo $ePais; ?>, <?php echo $eEstado; ?>, <?php echo $eMunicipio; ?> 
					<br>
					<?php echo $eColonia; ?>, <?php echo $eCalle; ?>, <?php echo $eNoExterior; ?>, <?php echo $eCodigoPostal; ?>
					<br>
					<?php echo $eRegimenFiscal; ?> - <?php echo $eRfc; ?>

				</div>
				<div class="row">
					<div class="col-md-3">
						
						<?php echo $cFolio; ?>
						<br>
						<?php echo $cePais; ?>, <?php echo $ceEstado; ?> - <?php echo $cFecha; ?>

					</div>
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-7">
					<?php echo $rNombre; ?> 
					<br>
					<?php echo $rPais; ?>, <?php echo $rEstado; ?>, <?php echo $rMunicipio; ?>
					<br>
					<?php echo $rColonia; ?>, <?php echo $rCalle; ?>, <?php echo $rNoExterior; ?>, <?php echo $rCodigoPostal; ?>
					<br>
					<?php echo $rRfc; ?>
				</div>
				<div class="col-md-5">
					<?php echo $cFormaDePago; ?>
					<br>
					<?php echo $cNoCertificado; ?>
				</div>
			</div>
			<br>
			<!--conceptos-->
			<div class="row">
				<div class="col-md-12">
					<table>
						<thead>
							<tr>
								<td>No. Identificacion</td>
								<td>Descripcion</td>
								<td>Precio Unitario</td>
								<td>Cantidad</td>
								<td>Importe</td>
							</tr>
						</thead>
						<tbody>

						<?php

						foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){ 
								   /*echo "<br />"; 
								   echo $Concepto['unidad']; 
								   echo "<br />"; 
								   echo $Concepto['importe']; 
								   echo "<br />"; 
								   echo $Concepto['cantidad']; 
								   echo "<br />"; 
								   echo $Concepto['descripcion']; 
								   echo "<br />"; 
								   echo $Concepto['valorUnitario']; 
								   echo "<br />";   
								   echo $Concepto['noIdentificacion']; */
								   	?>
								  	<tr>
										<td><?php echo $Concepto['noIdentificacion']; ?></td>
										<td><?php echo $Concepto['descripcion']; ?></td>
										<td><?php echo $Concepto['valorUnitario']; ?></td>
										<td><?php echo $Concepto['cantidad']; ?></td>
										<td><?php echo $Concepto['importe']; ?></td>
									</tr>

								<?php
								} 

								?>
							

							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<br>
									<br>
									<?php echo $iImpuesto; ?> <?php echo $iTasa; ?>%
									<br>
									total
								</td>
								<td>
									<br>
									<?php echo $cSubTotal; ?>
									<br>
									<?php echo $iImporte ?>
									<br>
									<?php echo $cTotal; ?>
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