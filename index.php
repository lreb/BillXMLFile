<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read XML</title>
</head>
<body>
	<?php

	// The file test.xml contains an XML document with a root element
	// and at least an element /[root]/title.

	if (file_exists('ejemplo2.xml')) {
	    //$xml = simplexml_load_file('ejemplo2.xml');  
	 	$xml = SimpleXMLElement('ejemplo2.xml');
	 	echo $xml->xml[0]->Domicilio;


	 	print_r("<br>");
	 	print_r($xml["version"]);
	 	print_r("<br>");


	 	print_r("<br>");
	 	print_r("<br>");
	    print_r($xml);
	} else {
	    exit('Failed to open test.xml.');
	}

	?>
</body>
</html>