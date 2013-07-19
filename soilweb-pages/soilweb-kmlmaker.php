<?php
    
    function soilweb_objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
        
		if (is_array($d)) {
			/*
             * Return array converted to object
             * Using __FUNCTION__ (Magic constant)
             * for recursive call
             */
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}
    
    if(isset($_REQUEST['id'])) {
        $id = urlencode($_REQUEST['id']);
    } else {
        $id = NULL;
    }
    
    if(isset($_REQUEST['soil_order'])) {
        $soil_order = urlencode($_REQUEST['soil_order']);
    } else {
        $soil_order = NULL;
    }
    
    if(isset($_REQUEST['ecosystem'])) {
        $ecosystem = urlencode($_REQUEST['ecosystem']);
    } else {
        $ecosystem = NULL;
    }
    
    if(isset($_REQUEST['climate_zone'])) {
        $climate_zone = urlencode($_REQUEST['climate_zone']);
    } else {
        $climate_zone = NULL;
    }
    
    if(isset($_REQUEST['bc_biogeoclimatic_zone'])) {
        $bc_biogeoclimatic_zone = urlencode($_REQUEST['bc_biogeoclimatic_zone']);
    } else {
        $bc_biogeoclimatic_zone = NULL;
    }
    
    $jsonQuery = 'https://www.googleapis.com/fusiontables/v1/query?sql=SELECT+*+FROM+1GcsfYO1GmcM7Xd2BNqoyJTfaH6Ml7jhwzOPS-wQ';
    
    $jsonEnd = '&key=AIzaSyBgE3LMY_oLepSsYwWXY5r1mA19WN0IB4c';
    
    if($id or $soil_order or $ecosystem or $climate_zone or $bc_biogeoclimatic_zone) {
        $jsonQuery .= "+WHERE+leave_blank=''";
    }
    
    if($id) {
        $jsonQuery .= "+AND+id=" . $id . "";
    }
    
    if($soil_order) {
        $jsonQuery .= "+AND+soil_order='" . $soil_order . "'";
    }
    
    if($ecosystem) {
        $jsonQuery .= "+AND+ecosystem='" . $ecosystem . "'";
    }
    
    if($climate_zone) {
        $jsonQuery .= "+AND+climate_zone='" . $climate_zone . "'";
    }
    
    if($bc_biogeoclimatic_zone) {
        $jsonQuery .= "+AND+bc_biogeoclimatic_zone='" . $bc_biogeoclimatic_zone . "'";
    }
    
    $jsonQuery .= $jsonEnd;
    
    $jsonData = file_get_contents($jsonQuery);
    
    $data = json_decode($jsonData);
    
    $array = soilweb_objectToArray($data);
    
    // Temporary variable
    
    $temp = 0;
    
    // Creates the Document.
    $dom = new DOMDocument('1.0', 'UTF-8');
    
    // Creates the root KML element and appends it to the root document.
    $node = $dom->createElementNS('http://earth.google.com/kml/2.1', 'kml');
    $parNode = $dom->appendChild($node);
    
    // Creates a KML Document element and append it to the KML element.
    $dnode = $dom->createElement('Document');
    $docNode = $parNode->appendChild($dnode);
    
    // Iterates through the MySQL results, creating one Placemark for each row.
    while ($array['rows'][$temp][1] != NULL)
    {
        // Creates a Placemark and append it to the Document.
        
        $node = $dom->createElement('Placemark');
        $placeNode = $docNode->appendChild($node);
        
        // Creates an id attribute and assign it the value of id column.
        $placeNode->setAttribute('id', 'placemark' . $array['rows'][$temp][1]);
        
        // Create name, and description elements and assigns them the values of the name and address columns from the results.
        
        $nameNode = $dom->createElement('name',htmlentities($array['rows'][$temp][2]));
        $placeNode->appendChild($nameNode);
        
        $descStr = 'Link: <a href="../site/?id=' . $array['rows'][$temp][1] . '">Site ' . $array['rows'][$temp][1] . '</a><br />
        Soil Order: ' . $array['rows'][$temp][18] . '<br />
        Climate Zone: ' . $array['rows'][$temp][38] . '<br />
        Ecosystem: ' . $array['rows'][$temp][34] . '<br />
        City/Region: ' . $array['rows'][$temp][17];
        $descNode = $dom->createElement('description', $descStr);
        $placeNode->appendChild($descNode);
        
        // Creates a Point element.
        $pointNode = $dom->createElement('Point');
        $placeNode->appendChild($pointNode);
        
        // Creates a coordinates element and gives it the value of the lng and lat columns from the results.
        $coorStr = $array['rows'][$temp][15] . ','  . $array['rows'][$temp][14];
        $coorNode = $dom->createElement('coordinates', $coorStr);
        $pointNode->appendChild($coorNode);
        
        $temp++;
    }
    
    $kmlOutput = $dom->saveXML();
    header('Content-type: application/vnd.google-earth.kml+xml');
    echo $kmlOutput;
    ?>