<?php
		header('Content-type: application/vnd.google-earth.kml+xml');
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

    $jsonQuery = 'https://www.googleapis.com/fusiontables/v1/query?sql=SELECT+*+FROM+1N1o4vH-_ENy_NzApLriGaTb-mOFeckMymhT0WRU';

    $jsonEnd = '&key=AIzaSyAgZ1MFetzZJyD8KQGVlaAhR1mRYIFSur4';

    $jsonQuery .= $jsonEnd;

    $jsonData = file_get_contents($jsonQuery);

    $data = json_decode($jsonData);

    $array = soilweb_objectToArray($data);

    // Temporary variable

    $temp = 0;

    $armlString = '<?xml version="1.0" encoding="UTF-8"?>
    <kml xmlns="http://www.opengis.net/kml/2.2"
         xmlns:ar="http://www.openarml.org/arml/1.0"
         xmlns:wikitude="http://www.openarml.org/wikitude/1.0">

        <Document>
            <ar:provider id="SOILx">
                <ar:name>SOILx Augmented Reality</ar:name>
                <ar:description>The University of British Columbia\'s SOILx database provides a platform for making large sets of soil sites extractable, explorable, and exciting.</ar:description>
                <wikitude:providerUrl>http://ar-soilweb.sites.olt.ubc.ca/ </wikitude:providerUrl>
                <wikitude:tags>nature, education</wikitude:tags>
                <wikitude:logo>http://ar-soilweb.sites.olt.ubc.ca/files/2013/07/test-logo.png</wikitude:logo>
                <wikitude:icon>http://ar-soilweb.sites.olt.ubc.ca/files/2013/07/test-icon.png</wikitude:icon>
                <wikitude:shortName>SOILx</wikitude:shortName>
                <wikitude:hiResIcon>http://ar-soilweb.sites.olt.ubc.ca/files/2013/07/test.png</wikitude:hiResIcon>
                <wikitude:noPromotion>true</wikitude:noPromotion>
            </ar:provider>
    ';

    // Iterates through the Fusion Table results, creating one Placemark for each row.
    while (isset($array['rows'][$temp][1]))
    {
            if($array['rows'][$temp][70] != "") {
                $imageURL = $array['rows'][$temp][70];
            } else {
                $imageURL = "http://ar-soilweb.sites.olt.ubc.ca/files/2013/07/test.png";
            }

            $armlString .= '<Placemark id="'. $array['rows'][$temp][1] .'">
                <ar:provider>SOILx</ar:provider>
                <name>Site ' . $array['rows'][$temp][1] . ': ' . $array['rows'][$temp][2] . '</name>
                <description>' . $array['rows'][$temp][50] .'</description>
                <wikitude:info>
                    <wikitude:hiResImageUrl>' . $imageURL . '</wikitude:hiResImageUrl>
                    <wikitude:url name="SOILx Soil Site Page">http://ar-soilweb.sites.olt.ubc.ca/site/?id=' . $array['rows'][$temp][1] . '</wikitude:url>
                </wikitude:info>
                <Point>
                    <coordinates>' . $array['rows'][$temp][11] . ',' . $array['rows'][$temp][10] . '</coordinates>
                </Point>
            </Placemark>
            ';

        $temp++;
    }

    $armlString .= '
        </Document>
    </kml>
    ';
		echo $armlString;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadXML($armlString);
    $kmlOutput = $dom->saveXML();
    $my_file = fopen("myfile.kml", "w");
    fwrite($my_file, $kmlOutput);
    fclose($my_file);
?>
