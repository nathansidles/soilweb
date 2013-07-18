<?php

    /*
     Plugin Name: Soilweb
     Plugin URI:
     Description: This plugin contains shortcode for creating the SoilWeb filter bar ([soilweb_filter]), search page([soilweb_search]), map page ([soilweb_map]), aggregated search results page ([soilweb_results], both as a list ([soilweb_list]) and as a map([soilweb_map])), and individual soil site page ([soilweb_site]). It also has some supporting JavaScript and CSS files.
     Version: 1.0.0
     Author: Nathan Sidles
     Author URI: http://www.citykindaguy.com/
     License: GPL2
     
     This program is free software; you can redistribute it and/or modify
     it under the terms of the GNU General Public License, version 2, as
     published by the Free Software Foundation.
     
     This program is distributed in the hope that it will be useful,
     but WITHOUT ANY WARRANTY; without even the implied warranty of
     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     GNU General Public License for more details.
     
     You should have received a copy of the GNU General Public License
     along with this program; if not, write to the Free Software
     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
     
     */
    
    function soilweb_enqueue_script_1(){
        wp_enqueue_script('soilweb-script-1', 'http://www.google.com/jsapi');
    }
    function soilweb_enqueue_script_2(){
        wp_enqueue_script('soilweb-script-2', 'http://maps.googleapis.com/maps/api/js?sensor=false');
    }
    function soilweb_enqueue_script_3(){
        wp_enqueue_script('soilweb-script-3', plugins_url( '/js/soilweb-tabs.js' , __FILE__ ), array('jquery-ui-tabs'));
    }
    function soilweb_enqueue_script_4(){
        wp_enqueue_script('soilweb-script-4', plugins_url( '/js/soilweb-accordions.js' , __FILE__ ), array('jquery-ui-accordion'));
    }
    function soilweb_enqueue_script_5(){
    
        $mapsQuery = "/js/soilweb-maps.php?leave_blank=''";
        if(isset($_REQUEST['id']) && $_REQUEST['id'] != '')
            $mapsQuery .= "&id=" . urlencode($_REQUEST['id']);
        if(isset($_REQUEST['site_name']) && $_REQUEST['site_name'] != '')
            $mapsQuery .= "&site_name=" . urlencode($_REQUEST['site_name']) . "";
        if(isset($_REQUEST['data_source']) && $_REQUEST['data_source'] != '')
            $mapsQuery .= "&data_source=" . urlencode($_REQUEST['data_source']) . "";
        if(isset($_REQUEST['expert']) && $_REQUEST['expert'] != '')
            $mapsQuery .= "&expert=" . urlencode($_REQUEST['expert']) . "";
        if(isset($_REQUEST['associated_courses']) && $_REQUEST['associated_courses'] != '')
            $mapsQuery .= "&associated_courses=" . urlencode($_REQUEST['associated_courses']) . "";
        if(isset($_REQUEST['location']) && $_REQUEST['location'] != '')
            $mapsQuery .= "&location=" . urlencode($_REQUEST['location']) . "";
        if(isset($_REQUEST['cityregion']) && $_REQUEST['cityregion'] != '')
            $mapsQuery .= "&cityregion=" . urlencode($_REQUEST['cityregion']) . "";
        if(isset($_REQUEST['degrees']) && $_REQUEST['degrees'] != '') {
            $mapsQuery .= "&degrees=" . urlencode($_REQUEST['degrees']) . "";
        }
        if(isset($_REQUEST['latitude']) && $_REQUEST['latitude'] != '') {
            $mapsQuery .= "&latitude=" . urlencode($_REQUEST['latitude']) . "";
        }
        if(isset($_REQUEST['longitude']) && $_REQUEST['longitude'] != '') {
            $mapsQuery .= "&longitude=" . urlencode($_REQUEST['longitude    ']) . "";
        }
        if(isset($_REQUEST['min_ele']) && $_REQUEST['min_ele'] != '')
            $mapsQuery .= "&min_ele=" . urlencode($_REQUEST['min_ele']) . "";
        if(isset($_REQUEST['max_ele']) && $_REQUEST['max_ele'] != '')
            $mapsQuery .= "&max_ele=" . urlencode($_REQUEST['max_ele']) . "";
        if(isset($_REQUEST['ecosystem']) && $_REQUEST['ecosystem'] != '')
            $mapsQuery .= "&ecosystem=" . urlencode($_REQUEST['ecosystem']) . "";
        if(isset($_REQUEST['vegetation']) && $_REQUEST['vegetation'] != '')
            $mapsQuery .= "&vegetation=" . urlencode($_REQUEST['vegetation']) . "";
        if(isset($_REQUEST['land_use']) && $_REQUEST['land_use'] != '')
            $mapsQuery .= "&land_use=" . urlencode($_REQUEST['land_use']) . "";
        if(isset($_REQUEST['topography']) && $_REQUEST['topography'] != '')
            $mapsQuery .= "&topography=" . urlencode($_REQUEST['topography']) . "";
        if(isset($_REQUEST['glaciation']) && $_REQUEST['glaciation'] != '')
            $mapsQuery .= "&glaciation=" . urlencode($_REQUEST['glaciation']) . "";
        if(isset($_REQUEST['bc_biogeoclimatic_zone']) && $_REQUEST['bc_biogeoclimatic_zone'] != '')
            $mapsQuery .= "&bc_biogeoclimatic_zone=" . urlencode($_REQUEST['bc_biogeoclimatic_zone']) . "";
        if(isset($_REQUEST['climate_zone']) && $_REQUEST['climate_zone'] != '')
            $mapsQuery .= "&climate_zone=" . urlencode($_REQUEST['climate_zone']) . "";
        if(isset($_REQUEST['min_mean_annual_temp']) && $_REQUEST['min_mean_annual_temp'] != '')
            $mapsQuery .= "&min_mean_annual_temp=" . urlencode($_REQUEST['min_mean_annual_temp']) . "";
        if(isset($_REQUEST['max_mean_annual_temp']) && $_REQUEST['max_mean_annual_temp'] != '')
            $mapsQuery .= "&max_mean_annual_temp=" . urlencode($_REQUEST['max_mean_annual_temp']) . "";
        if(isset($_REQUEST['min_min_annual_temp']) && $_REQUEST['min_min_annual_temp'] != '')
            $mapsQuery .= "&min_min_annual_temp=" . urlencode($_REQUEST['min_min_annual_temp']) . "";
        if(isset($_REQUEST['max_min_annual_temp']) && $_REQUEST['max_min_annual_temp'] != '')
            $mapsQuery .= "&max_min_annual_temp=" . urlencode($_REQUEST['max_min_annual_temp']) . "";
        if(isset($_REQUEST['min_max_annual_temp']) && $_REQUEST['min_max_annual_temp'] != '')
            $mapsQuery .= "&min_max_annual_temp=" . urlencode($_REQUEST['min_max_annual_temp']) . "";
        if(isset($_REQUEST['max_max_annual_temp']) && $_REQUEST['max_max_annual_temp'] != '')
            $mapsQuery .= "&max_max_annual_temp=" . urlencode($_REQUEST['max_max_annual_temp']) . "";
        if(isset($_REQUEST['min_annual_prec']) && $_REQUEST['min_annual_prec'] != '')
            $mapsQuery .= "&min_annual_prec=" . urlencode($_REQUEST['min_annual_prec']) . "";
        if(isset($_REQUEST['max_annual_prec']) && $_REQUEST['max_annual_prec'] != '')
            $mapsQuery .= "&max_annual_prec=" . urlencode($_REQUEST['max_annual_prec']) . "";
        if(isset($_REQUEST['soil_order']) && $_REQUEST['soil_order'] != '')
            $mapsQuery .= "&soil_order=" . urlencode($_REQUEST['soil_order']) . "";
        if(isset($_REQUEST['great_group']) && $_REQUEST['great_group'] != '')
            $mapsQuery .= "&great_group=" . urlencode($_REQUEST['great_group']) . "";
        if(isset($_REQUEST['soil_series']) && $_REQUEST['soil_series'] != '')
            $mapsQuery .= "&soil_series=" . urlencode($_REQUEST['soil_series']) . "";
        if(isset($_REQUEST['classification_code']) && $_REQUEST['classification_code'] != '')
            $mapsQuery .= "&classification_code=" . urlencode($_REQUEST['classification_code']) . "";
        if(isset($_REQUEST['horizon_present']) && $_REQUEST['horizon_present'] != '')
            $mapsQuery .= "&horizon_present=" . urlencode($_REQUEST['horizon_present']) . "";
        if(isset($_REQUEST['parent_material']) && $_REQUEST['parent_material'] != '')
            $mapsQuery .= "&parent_material=" . urlencode($_REQUEST['parent_material']) . "";
        if(isset($_REQUEST['soil_texture']) && $_REQUEST['soil_texture'] != '')
            $mapsQuery .= "&soil_texture=" . urlencode($_REQUEST['soil_texture']) . "";
        if(isset($_REQUEST['soil_structure']) && $_REQUEST['soil_structure'] != '')
            $mapsQuery .= "&soil_structure=" . urlencode($_REQUEST['soil_structure']) . "";
        if(isset($_REQUEST['forest_humus']) && $_REQUEST['forest_humus'] != '')
            $mapsQuery .= "&forest_humus=" . urlencode($_REQUEST['forest_humus']) . "";
        if(isset($_REQUEST['charcoal']) && $_REQUEST['charcoal'] != '')
            $mapsQuery .= "&charcoal=" . urlencode($_REQUEST['charcoal']) . "";
        if(isset($_REQUEST['coatings']) && $_REQUEST['coatings'] != '')
            $mapsQuery .= "&coatings=" . urlencode($_REQUEST['coatings']) . "";
        if(isset($_REQUEST['soil_process_group']) && $_REQUEST['soil_process_group'] != '')
            $mapsQuery .= "&soil_process_group=" . urlencode($_REQUEST['soil_process_group']) . "";
        if(isset($_REQUEST['soil_process']) && $_REQUEST['soil_process'] != '')
            $mapsQuery .= "&soil_process=" . urlencode($_REQUEST['soil_process']) . "";
        if(isset($_REQUEST['description']) && $_REQUEST['description'] != '')
            $mapsQuery .= "&description=" . urlencode($_REQUEST['description']) . "";
    
        wp_enqueue_script('soilweb-script-5', plugins_url( $mapsQuery, __FILE__) );
    }
    function soilweb_enqueue_style_1(){
        wp_enqueue_style('soilweb-style-1', plugins_url( 'soilweb-style.css' , __FILE__) );
    }
    
    add_action('wp_enqueue_scripts','soilweb_enqueue_script_1');
    add_action('wp_enqueue_scripts','soilweb_enqueue_script_2');
    add_action('wp_enqueue_scripts','soilweb_enqueue_script_3');
    add_action('wp_enqueue_scripts','soilweb_enqueue_script_4');
    add_action('wp_enqueue_scripts','soilweb_enqueue_script_5');
    add_action('wp_enqueue_scripts','soilweb_enqueue_style_1');
    
    
    
    /*
    Generates code for 'makefilter' shortcode, creating a filter box for quick searches
    @since     1.0.0
    @return    string  HTML
    */
    
    function soilweb_filter() {
        
        $randInt = rand();
        
        return '<div class="soilweb-filter">
        
        <div id="filter-left">
        <h3>Quick Filter: </h3>
        </div>
        
        <div id="filter-middle">
        <form name="filter" action="../results/?search=' . $randInt . '" method="get">
        <select name="soil_order">
        <option value="">Soil Order</option>
        <option value="">---</option>
        <option value="Brunisol">Brunisol</option>
        <option value="Chernozem">Chernozem</option>
        <option value="Cryosol">Cryosol</option>
        <option value="Gleysol">Gleysol</option>
        <option value="Luvisol">Luvisol</option>
        <option value="Organic">Organic</option>
        <option value="Podzol">Podzol</option>
        <option value="Regosol">Regosol</option>
        <option value="Solonetz">Solonetz</option>
        <option value="Vertisol">Vertisol</option>
        </select>
        
        <select name="ecosystem">
        <option value="">Ecosystem</option>
        <option value="">---</option>
        <option value="Agriculture">Agriculture</option>
        <option value="Bog">Bog</option>
        <option value="Coniferous forest">Coniferous Forest</option>
        <option value="Deciduous forest">Deciduous Forest</option>
        <option value="Grassland">Grassland</option>
        <option value="Mixed forest">Mixed Forest</option>
        <option value="Tundra">Tundra</option>
        </select>
        
        <select name="climate_zone">
        <option value="">Climate Zone</option>
        <option value="">---</option>
        <option value="Humid maritime">Humid Maritime</option>
        <option value="Semi-arid">Semi Arid</option>
        <option value="Tundra">Tundra</option>
        </select>
        
        <select name="bc_biogeoclimatic_zone">
        <option value="">BC Biogeoclimatic Zone</option>
        <option value="">---</option>
        <option value="Coastal Western Hemlock">Coastal Western Hemlock</option>
        <option value="Bunchgrass">Bunchgrass</option>
        <option value="Tundra">Tundra</option>
        <option value="Montane Spruce">Montane Spruce</option>
        <option value="Interior Douglas-fir">Interior Douglas-fir</option>
        </select>
        </div>
        
        <div id="filter-right">
        <input type="submit" value="Filter All Sites">
        <input type="reset" value="Reset Filters" />
        </div>
        
        </div>
        </form>
        ';
        
    }
    
    add_shortcode('makefilter', 'soilweb_filter');
    
    /*
     Queries the Fusion Table, returning a std object
     @since     1.0.0
     @return    array  PHP array of results
     */
    
    function soilweb_FT_query() {
        
        $jsonQuery = "";
        
        if(isset($_REQUEST['id']) && $_REQUEST['id'] != '')
            $jsonQuery .= "+AND+id='" . urlencode($_REQUEST['id']) . "'";
        if(isset($_REQUEST['site_name']) && $_REQUEST['site_name'] != '')
            $jsonQuery .= "+AND+site_name+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['site_name']) . "'";
        if(isset($_REQUEST['data_source']) && $_REQUEST['data_source'] != '')
            $jsonQuery .= "+AND+vsslr_tool+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['data_source']) . "'";
        if(isset($_REQUEST['expert']) && $_REQUEST['expert'] != '')
            $jsonQuery .= "+AND+featured_expert+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['expert']) . "'";
        if(isset($_REQUEST['associated_courses']) && $_REQUEST['associated_courses'] != '')
            $jsonQuery .= "+AND+UBC_courses+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['associated_courses']) . "'";
        if(isset($_REQUEST['location']) && $_REQUEST['location'] != '')
            $jsonQuery .= "+AND+location+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['location']) . "'";
        if(isset($_REQUEST['cityregion']) && $_REQUEST['cityregion'] != '')
            $jsonQuery .= "+AND+cityregion+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['cityregion']) . "'";
        if(isset($_REQUEST['latitude']) && $_REQUEST['latitude'] != '') {
            $temp = 0;
            if(isset($_REQUEST['degrees']))
                $temp = urlencode($_REQUEST['degrees']);
            $minLat = urlencode($_REQUEST['latitude']) - $temp;
            $maxLat = urlencode($_REQUEST['latitude']) + $temp;
            $jsonQuery .= "+AND+latitude>=" . $minLat . "";
            $jsonQuery .= "+AND+latitude<=" . $maxLat . "";
        }
        if(isset($_REQUEST['longitude']) && $_REQUEST['longitude'] != '') {
            $temp = 0;
            if(isset($_REQUEST['degrees']))
                $temp = urlencode($_REQUEST['degrees']);
            $minLon = urlencode($_REQUEST['longitude']) - $temp;
            $maxLon = urlencode($_REQUEST['longitude']) + $temp;
            $jsonQuery .= "+AND+longitude>=" . $minLon . "";
            $jsonQuery .= "+AND+longitude<=" . $maxLon . "";
        }
        if(isset($_REQUEST['min_ele']) && $_REQUEST['min_ele'] != '')
            $jsonQuery .= "+AND+elevation>" . urlencode($_REQUEST['min_ele']) . "";
        if(isset($_REQUEST['max_ele']) && $_REQUEST['max_ele'] != '')
            $jsonQuery .= "+AND+elevation<" . urlencode($_REQUEST['max_ele']) . "";
        if(isset($_REQUEST['ecosystem']) && $_REQUEST['ecosystem'] != '')
            $jsonQuery .= "+AND+ecosystem+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['ecosystem']) . "'";
        if(isset($_REQUEST['vegetation']) && $_REQUEST['vegetation'] != '')
            $jsonQuery .= "+AND+current_veg_desc+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['vegetation']) . "'";
        if(isset($_REQUEST['land_use']) && $_REQUEST['land_use'] != '')
            $jsonQuery .= "+AND+current_land_use+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['land_use']) . "'";
        if(isset($_REQUEST['topography']) && $_REQUEST['topography'] != '')
            $jsonQuery .= "+AND+topography='" . urlencode($_REQUEST['topography']) . "'";
        if(isset($_REQUEST['glaciation']) && $_REQUEST['glaciation'] != '')
            $jsonQuery .= "+AND+affected_by_glaciation='" . urlencode($_REQUEST['glaciation']) . "'";
        if(isset($_REQUEST['bc_biogeoclimatic_zone']) && $_REQUEST['bc_biogeoclimatic_zone'] != '')
            $jsonQuery .= "+AND+bc_biogeoclimatic_zone='" . urlencode($_REQUEST['bc_biogeoclimatic_zone']) . "'";
        if(isset($_REQUEST['climate_zone']) && $_REQUEST['climate_zone'] != '')
            $jsonQuery .= "+AND+climate_zone+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['climate_zone']) . "'";
        if(isset($_REQUEST['min_mean_annual_temp']) && $_REQUEST['min_mean_annual_temp'] != '')
            $jsonQuery .= "+AND+mean_annual_temp>" . urlencode($_REQUEST['min_mean_annual_temp']) . "";
        if(isset($_REQUEST['max_mean_annual_temp']) && $_REQUEST['max_mean_annual_temp'] != '')
            $jsonQuery .= "+AND+mean_annual_temp<" . urlencode($_REQUEST['max_mean_annual_temp']) . "";
        if(isset($_REQUEST['min_min_annual_temp']) && $_REQUEST['min_min_annual_temp'] != '')
            $jsonQuery .= "+AND+minimum_annual_temp>" . urlencode($_REQUEST['min_min_annual_temp']) . "";
        if(isset($_REQUEST['max_min_annual_temp']) && $_REQUEST['max_min_annual_temp'] != '')
            $jsonQuery .= "+AND+minimum_annual_temp<" . urlencode($_REQUEST['max_min_annual_temp']) . "";
        if(isset($_REQUEST['min_max_annual_temp']) && $_REQUEST['min_max_annual_temp'] != '')
            $jsonQuery .= "+AND+maximum_annual_temp>" . urlencode($_REQUEST['min_max_annual_temp']) . "";
        if(isset($_REQUEST['max_max_annual_temp']) && $_REQUEST['max_max_annual_temp'] != '')
            $jsonQuery .= "+AND+maximum_annual_temp<" . urlencode($_REQUEST['max_max_annual_temp']) . "";
        if(isset($_REQUEST['min_annual_prec']) && $_REQUEST['min_annual_prec'] != '')
            $jsonQuery .= "+AND+mean_annual_prec>" . urlencode($_REQUEST['min_annual_prec']) . "";
        if(isset($_REQUEST['max_annual_prec']) && $_REQUEST['max_annual_prec'] != '')
            $jsonQuery .= "+AND+mean_annual_prec<" . urlencode($_REQUEST['max_annual_prec']) . "";
        if(isset($_REQUEST['soil_order']) && $_REQUEST['soil_order'] != '')
            $jsonQuery .= "+AND+soil_order+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['soil_order']) . "'";
        if(isset($_REQUEST['great_group']) && $_REQUEST['great_group'] != '')
            $jsonQuery .= "+AND+great_group+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['great_group']) . "'";
        if(isset($_REQUEST['soil_series']) && $_REQUEST['soil_series'] != '')
            $jsonQuery .= "+AND+soil_series+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['soil_series']) . "'";
        if(isset($_REQUEST['classification_code']) && $_REQUEST['classification_code'] != '')
            $jsonQuery .= "+AND+classification_code+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['classification_code']) . "'";
        if(isset($_REQUEST['horizon_present']) && $_REQUEST['horizon_present'] != '')
            $jsonQuery .= "+AND+soil_horizons_present+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['horizon_present']) . "'";
        if(isset($_REQUEST['parent_material']) && $_REQUEST['parent_material'] != '')
            $jsonQuery .= "+AND+parent_material+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['parent_material']) . "'";
        if(isset($_REQUEST['soil_texture']) && $_REQUEST['soil_texture'] != '')
            $jsonQuery .= "+AND+soil_texture_horizon+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['soil_texture']) . "'";
        if(isset($_REQUEST['soil_structure']) && $_REQUEST['soil_structure'] != '')
            $jsonQuery .= "+AND+soil_structure_horizon+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['soil_structure']) . "'";
        if(isset($_REQUEST['forest_humus']) && $_REQUEST['forest_humus'] != '')
            $jsonQuery .= "+AND+forest_humus_form+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['forest_humus']) . "'";
        if(isset($_REQUEST['charcoal']) && $_REQUEST['charcoal'] != '')
            $jsonQuery .= "+AND+charcoal_presence+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['charcoal']) . "'";
        if(isset($_REQUEST['coatings']) && $_REQUEST['coatings'] != '')
            $jsonQuery .= "+AND+coatings_presence+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['coatings']) . "'";
        if(isset($_REQUEST['soil_process_group']) && $_REQUEST['soil_process_group'] != '')
            $jsonQuery .= "+AND+primary_soil_process_group+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['soil_process_group']) . "'";
        if(isset($_REQUEST['soil_process']) && $_REQUEST['soil_process'] != '')
            $jsonQuery .= "+AND+primary_soil_process+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['soil_process']) . "'";
        if(isset($_REQUEST['description']) && $_REQUEST['description'] != '')
            $jsonQuery .= "+AND+technical_desc+CONTAINS+IGNORING+CASE+'" . urlencode($_REQUEST['description']) . "'";
        
        $jsonStart = 'https://www.googleapis.com/fusiontables/v1/query?sql=SELECT+*+FROM+1GcsfYO1GmcM7Xd2BNqoyJTfaH6Ml7jhwzOPS-wQ';
        
        $jsonWhere = urlencode("+WHERE+leave_blank=''");
        
        $jsonEnd = '&key=AIzaSyBgE3LMY_oLepSsYwWXY5r1mA19WN0IB4c';
        
        $jsonStart .= $jsonWhere;
        
        $jsonStart .= $jsonQuery;
        
        $jsonStart .= $jsonEnd;
        
        $jsonData = file_get_contents($jsonStart);
        
        $data = json_decode($jsonData);
        
        $array = soilweb_objectToArray($data);
        
        return $array;
    
    }
    
    /*
     Generates code for 'makelist' shortcode, creating a list of search results
     @since     1.0.0
     @return    string  HTML
     */
    
    function soilweb_list($array) {
        
        $temp = sizeof($array['rows']);
        
            // Make a table with a header for the information
            $tableHTML = '<table align="center" cellspacing="3" cellpadding="3" width="100%" style="margin:0px">
            <tr>
                <td align="left"><b>ID</b></td>
                <td align="left"><b>Site Name</b></td>
                <td align="left"><b>Soil Order</b></td>
                <td align="left"><b>City/Region</b></td>
            </tr>';
            
            for($i = 0; $i < $temp; $i++) {
                $tableHTML .= '<tr>
                    <td align="left">' . $array['rows'][$i][1] . '</td>
                    <td align="left"><a href="site/?id=' . $array['rows'][$i][1] . '">' . $array['rows'][$i][2] . '</a></td>
                    <td align="left">' . $array['rows'][$i][19] . '</td>
                    <td align="left">' . $array['rows'][$i][18] . '</td>
                </tr>';
            }
            
            $tableHTML .= '</table>';
        
        return $tableHTML;
    
    }
    
    add_shortcode('makelist', 'soilweb_list');
    
    function soilweb_map() {

        return '
        <div id="googft-mapCanvas" style="width:100%; height:550px;"></div>

        <script type="text/javascript">

            google.maps.event.addDomListener(window, \'load\', initialize);

        </script>';
                                 
    }

    add_shortcode('makemap', 'soilweb_map');
    
    function soilweb_results() {
        
        $array = soilweb_FT_query();
        
        if(sizeof($array) != 2) {
            
            $map = soilweb_map($array);
            $list = soilweb_list($array);
                                                                                                                                                                 
            $completeResults = '
            <div id="soilweb-tabs">
                <div id="menu-wrap">
                    <ul>
                        <li><a href="#map">Mapped Results</a></li>
                        <li><a href="#list">Listed Results</a></li>
                    </ul>
                </div>
                <div class="soilweb-tabs-pane" id="map">';
                
                    $completeResults .= $map;
                
                $completeResults .= '</div>
                <div class="soilweb-tabs-pane" id="list">';
                
                    $completeResults .= $list;
                
                $completeResults .= '</div>
            </div>';
            
            return $completeResults;
        } else {
            return '<p>No results found</p>';
        }
        
    }
    add_shortcode('makeresults', 'soilweb_results');
    
    /*
     Generates code for 'makesearch' shortcode, creating a search page
     @since     1.0.0
     @return    string  HTML
     */
    
    function soilweb_search() {
        
        $randInt = rand();
        
        return '
        <table>
        <form name="search" action="../results/?search=' . $randInt . '">
        </table>
        
        <table>
        <input type="submit" value="Search">
        <input type="reset" value="Reset" />
        </table>
        
        <div class="soilweb-search-left">
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Basic:</h3>
        </td></tr>
        <tr><td>
        Site ID:</td> <td><input type="number" name="id" min="0" style="width:50px">
        </td></tr>
        <tr><td>
        Site name (keyword):</td> <td><input type="text" name="site_name">
        </td></tr>
        </table>
        </div>
        
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Organizational:</h3>
        </td></tr>
        <tr><td>
        Data source (keyword):</td> <td><input type="text" name="data_source">
        </td></tr>
        <tr><td>
        Video expert (keyword):</td> <td><input type="text" name="expert">
        </td></tr>
        <tr><td>
        Associated course (keyword):</td> <td><input type="text" name="associated_courses">
        </td></tr>
        </table>
        </div>
        
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Location:</h3>
        </td></tr>
        <tr><td>
        Location name (keyword):</td> <td><input type="text" name="location">
        </td></tr>
        <tr><td>
        City/Region (keyword):</td> <td><input type="text" name="cityregion">
        </td></tr>
        <tr><td>
        Latitude/Longitude within <input type="number" name="degrees" min="0" style="width:20px"> &#176 of </td> <td><input type="number" name="latitude"> &#176 latitude, <input type="number" name="longitude"> &#176 longitude
        </td></tr>
        <tr><td>
        Elevation between</td> <td><input type="number" name="min_ele"> and <input type="number" name="max_ele"> m
        </td></tr>
        </table>
        </div>
        
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Ecology:</h3>
        </td></tr>
        <tr><td>
        Ecosystem (keyword):</td> <td><input type="text" name="ecosystem">
        </td></tr>
        <tr><td>
        Vegetation (keyword):</td> <td><input type="text" name="vegetation">
        </td></tr>
        <tr><td>
        Current land-use (keyword):</td> <td><input type="text" name="land_use">
        </td></tr>
        <tr><td>
        Topography:</td><td><input type="checkbox" name="topography" value="Level"> Level <input type="checkbox" name="topography" value="Inclined"> Inclined <input type="checkbox" name="topography" value="Steep">Steep
        </td></tr>
        <tr><td>
        Affected by glaciation:</td> <td><input type="checkbox" name="glaciation" value="Yes"> Yes <input type="checkbox" name="glaciation" value="No"> No
        </td></tr>
        <tr><td>
        </table>
        </div>
        
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Climate:</h3>
        </td></tr>
        <tr><td>BC Biogeoclimatic Zone:</td><td><select name="bc_biogeoclimatic_zone">
        <option value="">BC Biogeoclimatic Zone</option>
        <option value="">---</option>
        <option value="Coastal Western Hemlock">Coastal Western Hemlock</option>
        <option value="Bunchgrass">Bunchgrass</option>
        <option value="Tundra">Tundra</option>
        <option value="Montane Spruce">Montane Spruce</option>
        <option value="Interior Douglas-fir">Interior Douglas-fir</option>
        </select>
        </td></tr>
        <tr><td>Climate Zone:</td><td><select name="climate_zone">
        <option value="">Climate Zone</option>
        <option value="">---</option>
        <option value="Humid maritime">Humid Maritime</option>
        <option value="Semi-arid">Semi Arid</option>
        <option value="Tundra">Tundra</option>
        </select>
        </td></tr>
        <tr><td>
        Mean annual temperature between</td> <td><input type="number" name="min_mean_annual_temp"> and <input type="number" name="max_mean_annual_temp"> &#176 C
        </td></tr>
        <tr><td>
        Minimum annual temperature between</td> <td><input type="number" name="min_min_annual_temp"> and <input type="number" name="max_min_annual_temp"> &#176 C
        </td></tr>
        <tr><td>
        Maximum annual temperature between</td> <td><input type="number" name="min_max_annual_temp"> and <input type="number" name="max_max_annual_temp"> &#176 C
        </td></tr>
        <tr><td>
        Annual precipitation between</td> <td><input type="number" name="min_annual_prec"> and <input type="number" name="max_annual_prec"> mm
        </td></tr>
        </table>
        </div>
        </div>
        
        <div class="soilweb-search-right">
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Soil:</h3>
        </td></tr>
        <tr><td>
        Soil order:</td><td><select name="soil_order">
        <option value="">Soil Order</option>
        <option value="">---</option>
        <option value="Brunisol">Brunisol</option>
        <option value="Chernozem">Chernozem</option>
        <option value="Cryosol">Cryosol</option>
        <option value="Gleysol">Gleysol</option>
        <option value="Luvisol">Luvisol</option>
        <option value="Organic">Organic</option>
        <option value="Podzol">Podzol</option>
        <option value="Regosol">Regosol</option>
        <option value="Solonetz">Solonetz</option>
        <option value="Vertisol">Vertisol</option>
        </select>
        </td></tr>
        <tr><td>
        Great group (keyword):</td><td><input type="text" name="great_group">
        </td></tr>
        <tr><td>
        Soil series (keyword):</td><td><input type="text" name="soil_series">
        </td></tr>
        <tr><td>
        Classification code (keyword):</td><td><input type="text" name="classification_code">
        </td></tr>
        <tr><td>
        Horizon present (keyword):</td><td><input type="text" name="horizon_present">
        </td></tr>
        <tr><td>
        Landform/Parent material (keyword):</td><td><input type="text" name="parent_material">
        </td></tr>
        </table>
        </div>
        
        <div class="soilweb-search-box">
        <table>
        <tr><td>
        <h3 style="margin: 0px; padding: 0px;">Advanced soil:</h3>
        </td></tr>
        <tr><td>
        Soil texture (keyword):</td><td><input type="text" name="soil_texture">
        </td></tr>
        <tr><td>
        Soil structure (keyword):</td><td><input type="text" name="soil_structure">
        </td></tr>
        <tr><td>
        Forest humus form (keyword):</td><td><input type="text" name="forest_humus">
        </td></tr>
        <tr><td>
        Presence of charcoal:</td><td><input type="checkbox" name="charcoal" value="Yes"> Yes <input type="checkbox" name="charcoal" value="No"> No
        </td></tr>
        <tr><td>
        Presence of coatings:</td><td><input type="checkbox" name="coatings" value="Yes"> Yes <input type="checkbox" name="coatings" value="No"> No
        </td></tr>
        <tr><td>
        Primary soil process group:</td><td><select name="soil_process_group">
        <option value="">Soil Process Group</option>
        <option value="">---</option>
        <option value="Addition">Addition</option>
        <option value="Losses">Losses</option>
        <option value="Transformation">Transformation</option>
        <option value="Translocation">Translocation</option>
        </select>
        </td></tr>
        <tr><td>
        Soil process (keyword):</td><td><input type="text" name="soil_process">
        </td></tr>
        <tr><td>
        Description (keyword):</td><td><input type="text" name="description">
        </td></tr>
        </table>
        </div>
        </div>
        
        </form>
        </table>
        ';
        
    }
    
    add_shortcode('makesearch', 'soilweb_search');
    
    function soilweb_site() {
        
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        } else {
            $id = NULL;
        }
        
        if($id) {
            $array = soilweb_FT_query();
        }
        
        if($array['rows'][0][1] != '') {

            
            $completeSite = '<div class="soilweb-content-top"><h3>Site '
            .$array['rows'][0][1].
            ': '
            .$array['rows'][0][2];
            if($array['rows'][0][3] != "") {

            }
            $completeSite .= '</h3><p>'
            .$array['rows'][0][54].
            '</p>';
            
            $completeSite .= '</div>';
            
            $completeSite .= '<div class="soilweb-site-left">
            <div class="soilweb-content-box">
            <h3>Basic Facts</h3>
            <p><b>Soil Order: </b>'
            .$array['rows'][0][19].
            '<br /><b>Ecosystem: </b>'
            .$array['rows'][0][36].
            '<br /><b>Climate Zone: </b>'
            .$array['rows'][0][40].
            '<br /><b>BC Biogeoclimatic Zone: </b>'
            .$array['rows'][0][34].
            '</p><p><b>Location: </b><a href="../results/?id='
            .$array['rows'][0][1].
            '">'
            .$array['rows'][0][17].
            ' (map)</a><br /><b>City/Region: </b>'
            .$array['rows'][0][18].
            '</p>';
            
            $completeSite .= '
            
                </div>
                <div id="soilweb-accordion-1">
                    <div class="soilweb-accordion-title-1">
                        Soil Classification
                    </div>
                    <div class="soilweb-accordion-pane-1">
                        <p><b>Soil Order: </b>'
                        .$array['rows'][0][19].
                        '<br />Great Group: <b></b>'
                        .$array['rows'][0][20].
                        '<br />Subgroup: <b></b>'
                        .$array['rows'][0][21].
                        '<br /><b>Soil Series: </b>'
                        .$array['rows'][0][22].
                        '<br /><b>Classification Code: </b>'
                        .$array['rows'][0][23].
                        '<br /><b>Soil Horizons Present: </b>'
                        .$array['rows'][0][28].
                        '<br /><b>Diagnostic Horizon 1: </b>'
                        .$array['rows'][0][24].
                        '<br /><b>Diagnostic Horizon 2: </b>'
                        .$array['rows'][0][25].
                        '<br /><b>Diagnostic Horizon 3: </b>'
                        .$array['rows'][0][26].
                        '<br /><b>Diagnostic Horizon 4: </b>'
                        .$array['rows'][0][27].
                        '</p>
                    </div>
                </div>
                
                <div id="soilweb-accordion-2">
                    <div class="soilweb-accordion-title-2">
                        Land Form
                    </div>
                    <div class="soilweb-accordion-pane-1">
                    <p><b>Land Form: </b>'
                        .$array['rows'][0][30].
                        '<br /><b>Parent Material: </b>'
                        .$array['rows'][0][32].
                        '<br /><b>Elevation (m): </b>'
                        .$array['rows'][0][29].
                        '<br /><b>Topography: </b>'
                        .$array['rows'][0][33].
                        '<br /><b>Affected by Glaciation: </b>'
                        .$array['rows'][0][35].
                        '</p>
                    </div>
                </div>
                
                <div id="soilweb-accordion-3">
                    <div class="soilweb-accordion-title-3">
                       Climate
                    </div>
                    <div class="soilweb-accordion-pane-1">
                        <p><b>Climate Zone: </b>'
                        .$array['rows'][0][40].
                        '<br /><b>Mean Annual Temperature (C): </b>'
                        .$array['rows'][0][41].
                        '<br /><b>Minimum Annual Temperature (C): </b>'
                        .$array['rows'][0][42].
                        '<br /><b>Maximum Annual Temperature (C): </b>'
                        .$array['rows'][0][43].
                        '<br /><b>Mean Annual Precipitation (mm): </b>'
                        .$array['rows'][0][44].
                        '</p>
                    </div>
                </div>
                
                <div id="soilweb-accordion-4">
                    <div class="soilweb-accordion-title-4">
                       Land Use
                    </div>
                    <div class="soilweb-accordion-pane-1">
                        <p><b>Current Land Use: </b>'
                        .$array['rows'][0][39].
                        '<br /><b>Original Vegetation: </b>'
                        .$array['rows'][0][38].
                        '<br /><b>Current Vegetation: </b>'
                        .$array['rows'][0][37].
                        '</p>
                    </div>
                </div>
                
                <div id="soilweb-accordion-5">
                    <div class="soilweb-accordion-title-5">
                        Technical Description
                    </div>
                    <div class="soilweb-accordion-pane-1">
                        <p>'.$array['rows'][0][55].'</p>';
                        if($array['rows'][0][70] != "") {
                            $completeSite .= '<p><strong>For more information, click here:</strong>
                            <a href="'.$array['rows'][0][70].'"><img src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/07/Adobe_PDF_Icon.png" alt="PDF" style="display: block">(PDF)</a> '.$array['rows'][0][71].'</p>';
                        }
                    $completeSite .= '</div>
                </div>
                
                <div id="soilweb-accordion-6">
                    <div class="soilweb-accordion-title-6">
                        Soil Morphology
                    </div>
                    <div class="soilweb-accordion-pane-1">
                        <p><b>Soil Texture of Diagnostic Horizon or Prevailing Texture: </b>'
                        .$array['rows'][0][45].
                        '<br /><b>Forest Humus Form: </b>'
                        .$array['rows'][0][48].
                        '<br /><b>Presence of Charcoal: </b>'
                        .$array['rows'][0][49].
                        '<br /><b>Presence of Coatings: </b>'
                        .$array['rows'][0][50].
                        '</p>
                    </div>
                </div>
                
                <div id="soilweb-accordion-7">
                    <div class="soilweb-accordion-title-7">
                        Soil Formation Processes
                    </div>
                    <div class="soilweb-accordion-pane-2">
                        <p><b>Primary Soil Process Group: </b>'
                        .$array['rows'][0][51].
                        '<br /><b>Primary Soil Process: </b>'
                        .$array['rows'][0][52].
                        '<br /><b>Secondary Soil Process: </b>'
                        .$array['rows'][0][53].
                        '</p>
                    </div>
                </div>
            
            ';
            
            $completeSite .= '</div>
                <div class="soilweb-site-right">
                <div class="soilweb-content-media">
                <h3>Media</h3>';
            
            if($array['rows'][0][7] != "") {
                $completeSite .= '
                    <iframe width="420" height="315" src="' . $array['rows'][0][7] . '" frameborder="0" allowfullscreen></iframe>';
            }
            if($array['rows'][0][68] != "") {
                $completeSite .= '
                    <img width="100%" src="' . $array['rows'][0][68] . '" alt="' . $array['rows'][0][69] . '">';
                    if($array['rows'][0][69] != "") {
                        $completeSite .= '
                            <p style="text-align: center">' . $array['rows'][0][69] . '</p>';
                    }
            }
            if($array['rows'][0][68] == "" && $array['rows'][0][7] == "") {
                $completeSite .= '
                    <img width="100%" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/07/oops.png" alt="No media found">';
            }
            
            $completeSite .= '</div>
                <div class="soilweb-content-links">
                <h3>Links</h3>';
            
            if($array['rows'][0][57] != '' || $array['rows'][0][59] != '' || $array['rows'][0][61] != '' || $array['rows'][0][63] != '' || $array['rows'][0][65] != '' || $array['rows'][0][67] != '') {
            
                $completeSite .= '<p>';
                
                    if($array['rows'][0][57] != '') {
                        $completeSite .= '<b>External Page:</b> <a href="' . $array['rows'][0][57]. '">' . $array['rows'][0][56] . '</a>';
                    }
                    
                    if($array['rows'][0][59] != '') {
                        $completeSite .= '<br /><b>External Page:</b> <a href="' . $array['rows'][0][59]. '">' . $array['rows'][0][58] . '</a>';
                    }
                    
                    if($array['rows'][0][61] != '') {
                        $completeSite .= '<br /><b>External Page:</b> <a href="' . $array['rows'][0][61]. '">' . $array['rows'][0][60] . '</a>';
                    }
                    
                    if($array['rows'][0][63] != '') {
                        $completeSite .= '<br /><b>External Page:</b> <a href="' . $array['rows'][0][63]. '">' . $array['rows'][0][62] . '</a>';
                    }
                    
                    if($array['rows'][0][65] != '') {
                        $completeSite .= '<br /><b>External Page:</b> <a href="' . $array['rows'][0][65]. '">' . $array['rows'][0][64] . '</a>';
                    }
                    
                    if($array['rows'][0][67] != '') {
                        $completeSite .= '<b>External Page:</b> <a href="' . $array['rows'][0][67]. '">' . $array['rows'][0][54] . '</a>';
                    }
            
                $completeSite .= '</p>';
            
            }
            
            $completeSite .= '</div>
            </div>';
            
        } else {
            $completeSite = '<p>No valid soil site selected; please try again.</p>';
        }
        
        return $completeSite;
        
    }
    add_shortcode('makesite', 'soilweb_site');
    
    /*
     Consumes a std object and makes from it a PHP array
     @since     1.0.0
     @return    array PHP array
     */
    
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
?>