<?php
        
        $temp = 0;
    
        $jsonQuery = "leave_blank=''";
    
        if(isset($_REQUEST['id']) && $_REQUEST['id'] != '')
            $jsonQuery .= " AND id='" . $_REQUEST['id'] . "'";
        if(isset($_REQUEST['soil_order']) && $_REQUEST['soil_order'] != '')
            $jsonQuery .= " AND soil_order CONTAINS IGNORING CASE '" . $_REQUEST['soil_order'] . "'";
        if(isset($_REQUEST['great_group']) && $_REQUEST['great_group'] != '')
            $jsonQuery .= " AND great_group CONTAINS IGNORING CASE '" . $_REQUEST['great_group'] . "'";
        if(isset($_REQUEST['subgroup']) && $_REQUEST['subgroup'] != '')
            $jsonQuery .= " AND subgroup CONTAINS IGNORING CASE '" . $_REQUEST['subgroup'] . "'";
        if(isset($_REQUEST['ecosystem']) && $_REQUEST['ecosystem'] != '')
            $jsonQuery .= " AND ecosystem CONTAINS IGNORING CASE '" . $_REQUEST['ecosystem'] . "'";
        if(isset($_REQUEST['bc_biogeoclimatic_zone']) && $_REQUEST['bc_biogeoclimatic_zone'] != '')
            $jsonQuery .= " AND bc_biogeoclimatic_zone='" . $_REQUEST['bc_biogeoclimatic_zone'] . "'";
        if(isset($_REQUEST['climate_zone']) && $_REQUEST['climate_zone'] != '')
            $jsonQuery .= " AND climate_zone CONTAINS IGNORING CASE '" . $_REQUEST['climate_zone'] . "'";
        if(isset($_REQUEST['soil_texture_diag']) && $_REQUEST['soil_texture_diag'] != '')
            $jsonQuery .= " AND soil_texture_diag = '" . $_REQUEST['soil_texture_diag'] . "'";
        if(isset($_REQUEST['parent_material']) && $_REQUEST['parent_material'] != '')
            $jsonQuery .= " AND parent_material CONTAINS IGNORING CASE '" . $_REQUEST['parent_material'] . "'";
        if(isset($_REQUEST['primary_soil_process_group']) && $_REQUEST['primary_soil_process_group'] != '')
            $jsonQuery .= " AND primary_soil_process_group CONTAINS IGNORING CASE '" . $_REQUEST['primary_soil_process_group'] . "'";
        if(isset($_REQUEST['place_name']) && $_REQUEST['place_name'] != '')
            $jsonQuery .= " AND place_name CONTAINS IGNORING CASE '" . $_REQUEST['place_name'] . "'";
        if(isset($_REQUEST['city']) && $_REQUEST['city'] != '')
            $jsonQuery .= " AND city CONTAINS IGNORING CASE '" . $_REQUEST['city'] . "'";
        if(isset($_REQUEST['region']) && $_REQUEST['region'] != '')
            $jsonQuery .= " AND region CONTAINS IGNORING CASE '" . $_REQUEST['region'] . "'";
        if(isset($_REQUEST['country']) && $_REQUEST['country'] != '')
            $jsonQuery .= " AND country CONTAINS IGNORING CASE '" . $_REQUEST['country'] . "'";
        if(isset($_REQUEST['planet']) && $_REQUEST['planet'] != '')
            $jsonQuery .= " AND planet CONTAINS IGNORING CASE '" . $_REQUEST['planet'] . "'";
        if(isset($_REQUEST['latitude']) && $_REQUEST['latitude'] != '') {
            $temp = 0;
            if(isset($_REQUEST['degrees']))
                $temp = $_REQUEST['degrees'];
            $minLat = $_REQUEST['latitude'] - $temp;
            if($minLat < -90) {
                $minLat = -90;
            }
            $maxLat = $_REQUEST['latitude'] + $temp;
            if($maxLat > 90) {
                $maxLat = 90;
            }
            $jsonQuery .= " AND latitude>=" . $minLat . "";
            $jsonQuery .= " AND latitude<=" . $maxLat . "";
        }
        if(isset($_REQUEST['longitude']) && $_REQUEST['longitude'] != '') {
            $temp = 0;
            if(isset($_REQUEST['degrees']))
                $temp = $_REQUEST['degrees'];
            $minLon = $_REQUEST['longitude'] - $temp;
            if($minLon < -180) {
                $minLon = -180;
            }
            $maxLon = $_REQUEST['longitude'] + $temp;
            if($maxLon > 180) {
                $maxLon = 180;
            }
            $jsonQuery .= " AND longitude>=" . $minLon . "";
            $jsonQuery .= " AND longitude<=" . $maxLon . "";
        }
        if(isset($_REQUEST['min_ele']) && $_REQUEST['min_ele'] != '')
            $jsonQuery .= " AND elevation>" . $_REQUEST['min_ele'] . "";
        if(isset($_REQUEST['max_ele']) && $_REQUEST['max_ele'] != '')
            $jsonQuery .= " AND elevation<" . $_REQUEST['max_ele'] . "";
        if(isset($_REQUEST['courses']) && $_REQUEST['courses'] != '')
            $jsonQuery .= " AND courses CONTAINS IGNORING CASE '" . $_REQUEST['courses'] . "'";
        if(isset($_REQUEST['universities']) && $_REQUEST['universities'] != '')
            $jsonQuery .= " AND universities CONTAINS IGNORING CASE '" . $_REQUEST['universities'] . "'";
        if(isset($_REQUEST['featured_expert']) && $_REQUEST['featured_expert'] != '')
            $jsonQuery .= " AND featured_expert CONTAINS IGNORING CASE '" . $_REQUEST['featured_expert'] . "'";
        if(isset($_REQUEST['source_name']) && $_REQUEST['source_name'] != '')
            $jsonQuery .= " AND source_name CONTAINS IGNORING CASE '" . $_REQUEST['source_name'] . "'";
        
        echo 'google.load(\'visualization\', \'1\', {\'packages\':[\'corechart\', \'table\', \'geomap\']});
                    
            var FT_TableID = "' . $_REQUEST['soilweb_ft_address'] . '";
            var layer = null;
            
            function initialize() {
                //SET CENTER
                map = new google.maps.Map(document.getElementById(\'googft-mapCanvas\'), {
                      center: new google.maps.LatLng(50.942321,-120.329102),
                      zoom: 5,
                      scrollwheel:false,
                      mapTypeControl: true,
                      mapTypeId: google.maps.MapTypeId.TERRAIN,
                      streetViewControl: false,
                      overviewMapControl: true,
                      mapTypeControlOptions: {
                          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                      },
                      // CONTROLS
                      zoomControl: true
                  });

                  // GET DATA
                layer = new google.maps.FusionTablesLayer({
                    query: {
                        select: \'latitude,longitude\',
                        from: FT_TableID,
                        where: "' . $jsonQuery . '"
                    },
                    options: {
                        styleId: 2,
                        templateId: 2,
                    }
                });
                
                //SET MAP
                layer.setMap(map);

                var queryText = encodeURIComponent("SELECT \'latitude\', \'longitude\' FROM "+FT_TableID+" WHERE ' . $jsonQuery . '");
                var query = new google.visualization.Query(\'http://www.google.com/fusiontables/gvizdata?tq=\'  + queryText);
                                               
                                                                                                                        
                //set the callback function
                query.send(zoomTo);
            }
                                                       
            function zoomTo(response) {
            
                numRows = response.getDataTable().getNumberOfRows();
                numCols = response.getDataTable().getNumberOfColumns();
            
                if(numRows != 0) {
                    var bounds = new google.maps.LatLngBounds();
                for(i = 0; i < numRows; i++) {
                    var point = new google.maps.LatLng(parseFloat(response.getDataTable().getValue(i, 0)),parseFloat(response.getDataTable().getValue(i, 1)));
                    bounds.extend(point);
                }
                map.fitBounds(bounds);
            }
            }
             google.maps.event.addDomListener(window, "load", initialize);
';
                                 
?>