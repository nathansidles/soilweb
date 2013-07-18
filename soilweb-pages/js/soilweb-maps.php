<?php
    
        $temp = 0;
    
        $jsonQuery = "leave_blank=''";
    
        if(isset($_REQUEST['id']) && $_REQUEST['id'] != '')
            $jsonQuery .= " AND id=" . $_REQUEST['id'] . "";
        if(isset($_REQUEST['site_name']) && $_REQUEST['site_name'] != '')
            $jsonQuery .= " AND site_name CONTAINS IGNORING CASE '" . $_REQUEST['site_name'] . "'";
        if(isset($_REQUEST['data_source']) && $_REQUEST['data_source'] != '')
            $jsonQuery .= " AND vsslr_tool CONTAINS IGNORING CASE '" . $_REQUEST['data_source'] . "'";
        if(isset($_REQUEST['expert']) && $_REQUEST['expert'] != '')
            $jsonQuery .= " AND featured_expert CONTAINS IGNORING CASE '" . $_REQUEST['expert'] . "'";
        if(isset($_REQUEST['associated_courses']) && $_REQUEST['associated_courses'] != '')
            $jsonQuery .= " AND UBC_courses CONTAINS IGNORING CASE '" . $_REQUEST['associated_courses'] . "'";
        if(isset($_REQUEST['location']) && $_REQUEST['location'] != '')
            $jsonQuery .= " AND location CONTAINS IGNORING CASE '" . $_REQUEST['location'] . "'";
        if(isset($_REQUEST['cityregion']) && $_REQUEST['cityregion'] != '')
            $jsonQuery .= " AND cityregion CONTAINS IGNORING CASE '" . $_REQUEST['cityregion'] . "'";
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
        if(isset($_REQUEST['ecosystem']) && $_REQUEST['ecosystem'] != '')
            $jsonQuery .= " AND ecosystem CONTAINS IGNORING CASE '" . $_REQUEST['ecosystem'] . "'";
        if(isset($_REQUEST['vegetation']) && $_REQUEST['vegetation'] != '')
            $jsonQuery .= " AND current_veg_desc CONTAINS IGNORING CASE '" . $_REQUEST['vegetation'] . "'";
        if(isset($_REQUEST['land_use']) && $_REQUEST['land_use'] != '')
            $jsonQuery .= " AND current_land_use CONTAINS IGNORING CASE '" . $_REQUEST['land_use'] . "'";
        if(isset($_REQUEST['topography']) && $_REQUEST['topography'] != '')
            $jsonQuery .= " AND topography='" . $_REQUEST['topography'] . "'";
        if(isset($_REQUEST['glaciation']) && $_REQUEST['glaciation'] != '')
            $jsonQuery .= " AND affected_by_glaciation='" . $_REQUEST['glaciation'] . "'";
        if(isset($_REQUEST['bc_biogeoclimatic_zone']) && $_REQUEST['bc_biogeoclimatic_zone'] != '')
            $jsonQuery .= " AND bc_biogeoclimatic_zone='" . $_REQUEST['bc_biogeoclimatic_zone'] . "'";
        if(isset($_REQUEST['climate_zone']) && $_REQUEST['climate_zone'] != '')
            $jsonQuery .= " AND climate_zone CONTAINS IGNORING CASE '" . $_REQUEST['climate_zone'] . "'";
        if(isset($_REQUEST['min_mean_annual_temp']) && $_REQUEST['min_mean_annual_temp'] != '')
            $jsonQuery .= " AND mean_annual_temp>" . $_REQUEST['min_mean_annual_temp'] . "";
        if(isset($_REQUEST['max_mean_annual_temp']) && $_REQUEST['max_mean_annual_temp'] != '')
            $jsonQuery .= " AND mean_annual_temp<" . $_REQUEST['max_mean_annual_temp'] . "";
        if(isset($_REQUEST['min_min_annual_temp']) && $_REQUEST['min_min_annual_temp'] != '')
            $jsonQuery .= " AND minimum_annual_temp>" . $_REQUEST['min_min_annual_temp'] . "";
        if(isset($_REQUEST['max_min_annual_temp']) && $_REQUEST['max_min_annual_temp'] != '')
            $jsonQuery .= " AND minimum_annual_temp<" . $_REQUEST['max_min_annual_temp'] . "";
        if(isset($_REQUEST['min_max_annual_temp']) && $_REQUEST['min_max_annual_temp'] != '')
            $jsonQuery .= " AND maximum_annual_temp>" . $_REQUEST['min_max_annual_temp'] . "";
        if(isset($_REQUEST['max_max_annual_temp']) && $_REQUEST['max_max_annual_temp'] != '')
            $jsonQuery .= " AND maximum_annual_temp<" . $_REQUEST['max_max_annual_temp'] . "";
        if(isset($_REQUEST['min_annual_prec']) && $_REQUEST['min_annual_prec'] != '')
            $jsonQuery .= " AND mean_annual_prec>" . $_REQUEST['min_annual_prec'] . "";
        if(isset($_REQUEST['max_annual_prec']) && $_REQUEST['max_annual_prec'] != '')
            $jsonQuery .= " AND mean_annual_prec<" . $_REQUEST['max_annual_prec'] . "";
        if(isset($_REQUEST['soil_order']) && $_REQUEST['soil_order'] != '')
            $jsonQuery .= " AND soil_order CONTAINS IGNORING CASE '" . $_REQUEST['soil_order'] . "'";
        if(isset($_REQUEST['great_group']) && $_REQUEST['great_group'] != '')
            $jsonQuery .= " AND great_group CONTAINS IGNORING CASE '" . $_REQUEST['great_group'] . "'";
        if(isset($_REQUEST['soil_series']) && $_REQUEST['soil_series'] != '')
            $jsonQuery .= " AND soil_series CONTAINS IGNORING CASE '" . $_REQUEST['soil_series'] . "'";
        if(isset($_REQUEST['classification_code']) && $_REQUEST['classification_code'] != '')
            $jsonQuery .= " AND classification_code CONTAINS IGNORING CASE '" . $_REQUEST['classification_code'] . "'";
        if(isset($_REQUEST['horizon_present']) && $_REQUEST['horizon_present'] != '')
            $jsonQuery .= " AND soil_horizons_present CONTAINS IGNORING CASE '" . $_REQUEST['horizon_present'] . "'";
        if(isset($_REQUEST['parent_material']) && $_REQUEST['parent_material'] != '')
            $jsonQuery .= " AND parent_material CONTAINS IGNORING CASE '" . $_REQUEST['parent_material'] . "'";
        if(isset($_REQUEST['soil_texture']) && $_REQUEST['soil_texture'] != '')
            $jsonQuery .= " AND soil_texture_horizon CONTAINS IGNORING CASE '" . $_REQUEST['soil_texture'] . "'";
        if(isset($_REQUEST['soil_structure']) && $_REQUEST['soil_structure'] != '')
            $jsonQuery .= " AND soil_structure_horizon CONTAINS IGNORING CASE '" . $_REQUEST['soil_structure'] . "'";
        if(isset($_REQUEST['forest_humus']) && $_REQUEST['forest_humus'] != '')
            $jsonQuery .= " AND forest_humus_form CONTAINS IGNORING CASE '" . $_REQUEST['forest_humus'] . "'";
        if(isset($_REQUEST['charcoal']) && $_REQUEST['charcoal'] != '')
            $jsonQuery .= " AND charcoal_presence CONTAINS IGNORING CASE '" . $_REQUEST['charcoal'] . "'";
        if(isset($_REQUEST['coatings']) && $_REQUEST['coatings'] != '')
            $jsonQuery .= " AND coatings_presence CONTAINS IGNORING CASE '" . $_REQUEST['coatings'] . "'";
        if(isset($_REQUEST['soil_process_group']) && $_REQUEST['soil_process_group'] != '')
            $jsonQuery .= " AND primary_soil_process_group CONTAINS IGNORING CASE '" . $_REQUEST['soil_process_group'] . "'";
        if(isset($_REQUEST['soil_process']) && $_REQUEST['soil_process'] != '')
            $jsonQuery .= " AND primary_soil_process CONTAINS IGNORING CASE '" . $_REQUEST['soil_process'] . "'";
        if(isset($_REQUEST['description']) && $_REQUEST['description'] != '')
            $jsonQuery .= " AND technical_desc CONTAINS IGNORING CASE '" . $_REQUEST['description'] . "'";
        
        echo '
        google.load(\'visualization\', \'1\', {\'packages\':[\'corechart\', \'table\', \'geomap\']});
                    
            var FT_TableID = "1GcsfYO1GmcM7Xd2BNqoyJTfaH6Ml7jhwzOPS-wQ";
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
';
                                 
?>