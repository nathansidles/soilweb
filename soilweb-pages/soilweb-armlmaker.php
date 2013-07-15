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

    $jsonQuery = 'https://www.googleapis.com/fusiontables/v1/query?sql=SELECT+*+FROM+1GcsfYO1GmcM7Xd2BNqoyJTfaH6Ml7jhwzOPS-wQ';
    
    $jsonEnd = '&key=AIzaSyBgE3LMY_oLepSsYwWXY5r1mA19WN0IB4c';
    
    $jsonQuery .= $jsonEnd;
    
    $jsonData = file_get_contents($jsonQuery);
    
    $data = json_decode($jsonData);
    
    $array = soilweb_objectToArray($data);
    
    // Temporary variable
    
    $temp = 0;

    $armlString .= '<?xml version="1.0" encoding="UTF-8"?>
    <kml xmlns="http://www.opengis.net/kml/2.2"
         xmlns:ar="http://www.openarml.org/arml/1.0"
         xmlns:wikitude="http://www.openarml.org/wikitude/1.0">

        <Document>
            <ar:provider id="mountain-tours-I-love.com">
                <ar:name>SOILw-Test-1</ar:name>
                <ar:description>The University of British Columbia\'s SOILw database provides a platform for making large sets of soil sites extractable, explorable, and exciting.</ar:description>
                <wikitude:providerUrl>http://www.citykindaguy.com/soilweb-testing/v2/ </wikitude:providerUrl>
                <wikitude:tags>nature, education</wikitude:tags>
                <wikitude:logo>http://www.citykindaguy.com/soilweb-testing/v1/test-logo.png</wikitude:logo>
                <wikitude:icon>http://www.citykindaguy.com/soilweb-testing/v1/test-icon.png</wikitude:icon>
                <wikitude:shortName>Soilweb Test 3</wikitude:shortName>
                <wikitude:promotionText>This is promotion text for the third Soilweb test!</wikitude:promotionText>
                <wikitude:promotionGraphic>http://www.citykindaguy.com/soilweb-testing/v1/test-promo.png</wikitude:promotionGraphic>
                <wikitude:hiResIcon>http://www.citykindaguy.com/soilweb-testing/v1/test.png</wikitude:hiResIcon>
                <wikitude:featureGraphic>http://www.citykindaguy.com/soilweb-testing/v1/test-feature.png</wikitude:featureGraphic>
                <wikitude:noPromotion>true</wikitude:noPromotion>
            </ar:provider>
    ';

    // Iterates through the Fusion Table results, creating one Placemark for each row.
    while ($array['rows'][$temp][1] != '')
    {
            $armlString .= '<Placemark id="'. $array['rows'][$temp][1] .'">
                <ar:provider>citykindaguy.com</ar:provider>
                <name>Site ' . $array['rows'][$temp][1] . ': ' . $array['rows'][$temp][2] . '</name>
                <description>' . $array['rows'][$temp][52] .'</description>
                <wikitude:info>
                    <wikitude:url name="Dynamic Link">http://www.citykindaguy.com/soilweb-testing/v2/site/?id=' . $array['rows'][$temp][1] . '</wikitude:url>
                </wikitude:info>
                <Point>
                    <coordinates>' . $array['rows'][$temp][15] . ',' . $array['rows'][$temp][14] . '</coordinates>
                </Point>
            </Placemark>
            ';
        
        $temp++;
    }

    $armlString .= '
        </Document>
    </kml>
    ';

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadXML($armlString);
    header('Content-type: application/vnd.google-earth.kml+xml');
    $kmlOutput = $dom->saveXML();
    echo $kmlOutput;

?>