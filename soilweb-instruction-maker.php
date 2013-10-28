<?php
    echo '
            <div id="soilweb-tabs" style="margin-right: 20px">
            <div id="menu-wrap">
            <ol style="margin-bottom: 0px; padding-bottom:0px">
                <li><a href="#settings">Settings</a></li>
                <li><a href="#database">Fusion Table</a></li>
                <li><a href="#wordpress">SOILx Pages</a></li>
                <li><a href="#plugin">SOILx Plugin</a></li>
                <li><a href="#images">Images</a></li>
            </ol>
            </div>
            <div class="soilweb-tabs-pane" id="settings">
                <h3>Set Fusion Table Settings:</h3>
                <form method="POST" action="options.php">
    ';
    
    settings_fields( 'soilweb_ft_data' );
    do_settings_sections( 'soilweb-instruction-page' );
    submit_button("Save Fusion Tables Changes");
    $climate_zones_array = get_option( 'climate_zones' );
        
    echo '
                </form>
                <hr />
                <h3>Set SOILx Category Information (remember to update the Fusion Table and Excel documents\' guidelines, if necessary):</h3>
                    <form method="post">
    ';
    
    wp_nonce_field('soilweb_nonce_check','soilweb_nonce_field');
    
    echo '
                        <p>Add an Ecosystem: <br /><input type="text" name="ecosystem_to_add"></p>
                        <p>Delete an Ecosystem: <br /><select name="ecosystem_to_delete">
                            <option value="">---</option>
    ';
    
    $tempArray = get_option('soilweb_ecosystems');
    foreach($tempArray as $tempValue) {
        echo '<option value="' . $tempValue . '">' . $tempValue . '</option>';
    }
    
    echo '
                    </select></p>
                    <p>Add a BC Biogeoclimatic Zone: <br /><input type="text" name="bc_biogeoclimatic_zone_to_add"></p>
                    <p>Delete a BC Biogeoclimatic Zone: <br /><select name="bc_biogeoclimatic_zone_to_delete">
                        <option value="">---</option>
    ';
    
    $tempArray = get_option('soilweb_bc_biogeoclimatic_zones');
    foreach($tempArray as $tempValue) {
        echo '<option value="' . $tempValue . '">' . $tempValue . '</option>';
    }
    
    echo '
                    </select></p>
                    <p>Add a Climate Zone: <br /><input type="text" name="climate_zone_to_add"></p>
                    <p>Delete a Climate Zone: <br /><select name="climate_zone_to_delete">
                        <option value="">---</option>
    ';
    
    $tempArray = get_option('soilweb_climate_zones');
    foreach($tempArray as $tempValue) {
        echo '<option value="' . $tempValue . '">' . $tempValue . '</option>';
    }
    
    echo '
                    </select></p>
                    <p>Add a Diagnostic Soil Texture: <br /><input type="text" name="diagnostic_soil_texture_to_add"></p>
                    <p>Delete a Diagnostic Soil Texture: <br /><select name="diagnostic_soil_texture_to_delete">
                        <option value="">---</option>
    ';
    
    $tempArray = get_option('soilweb_diagnostic_soil_textures');
    foreach($tempArray as $tempValue) {
        echo '<option value="' . $tempValue . '">' . $tempValue . '</option>';
    }

    echo '
                    </select></p>
                    <p>Add a Parent Material: <br /><input type="text" name="parent_material_to_add"></p>
                    <p>Delete a Parent Material: <br /><select name="parent_material_to_delete">
                        <option value="">---</option>
    ';
    
    $tempArray = get_option('soilweb_parent_materials');
    foreach($tempArray as $tempValue) {
        echo '<option value="' . $tempValue . '">' . $tempValue . '</option>';
    }

    echo '
                    </select></p>
                    <p>Add a Soil Processes Group: <br /><input type="text" name="soil_processes_group_to_add"></p>
                    <p>Delete a Soil Processes Group: <br /><select name="soil_processes_group_to_delete">
                        <option value="">---</option>
    ';
    
    $tempArray = get_option('soilweb_soil_processes_groups');
    foreach($tempArray as $tempValue) {
        echo '<option value="' . $tempValue . '">' . $tempValue . '</option>';
    }
    
    echo '
                    </select></p>
    ';
    
    submit_button("Save SOILx Categories Changes");
    
    echo '
                </form>
            </div>
            <div class="soilweb-tabs-pane" id="database">
                <p>The SOILx database is located in a Google Fusion Tables table. It is here:</p>
                <p>https://www.google.com/fusiontables/data?docid=1HGHJ4NcEA9c2MMQgFEF-gIvRpjqGeuke126Q4nU</p>
                <p><strong>NOTE: DO NOT ADD COLUMNS, CHANGE THE ORDER OF COLUMNS, RENAME COLUMNS, OR DELETE COLUMNS. THE soilX PLUGIN REFERS TO FIELDS BOTH BY ORDER AND BY NAME.</strong></p>
                <h3>Adding a Single Soil Site</h3>
                <p>To add a single soil site to the SOILx Fusion Tables table:</p>
                    <ol>
                    <li>Navigate to the SOILx Fusion Tables URL at the top of this document.</li>
                    <li>Select the &#8220;Sign In&#8221; button in the upper right.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-01.png"><img class="aligncenter size-large wp-image-644" alt="doc-db-01" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-01-940x402.png" width="625" height="267" /></a></li>
                    <li>Log in.</li>
                    <li>Select the &#8220;Edit&#8221; menu option near the left.</li>
                    <li>Select the &#8220;Add Row&#8221; option. The &#8220;Add Row&#8221; window should appear.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-02.png"><img class="aligncenter size-large wp-image-645" alt="doc-db-02" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-02-940x355.png" width="625" height="236" /></a></li>
                    <li>Enter the soil site data in the available fields.<br />
                    <strong>Note:</strong> Make sure that your data conforms to the standards outlined in the &#8216;Contributors&#8217; pane here: http://ar-soilweb.sites.olt.ubc.ca/help.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-03.png"><img class="aligncenter size-full wp-image-646" alt="doc-db-03" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-03.png" width="582" height="605" /></a></li>
                    <li>Select the &#8216;Save&#8217; option to save your soil site.</li>
                </ol>
                <p>&nbsp;</p>
                <h3>Adding Multiple Soil Sites</h3>
                <p>To add multiple soil sites to the SOILx Fusion Tables table (to add soil sites from a provided document, skip to step three):</p>
                <ol>
                    <li><span style="line-height: 14px;">Download the SOILx upload template.</span></li>
                    <li>Enter the soil site data into the document.<br />
                    <strong>Note:</strong> Make sure that your data conforms to the standards outlined in the &#8216;Contributors&#8217; pane here: http://ar-soilweb.sites.olt.ubc.ca/help.</li>
                    <li>Delete rows 1 and 2 from the document and save it. The top row should start with &#8220;leave_blank&#8221; and continue on to &#8220;image_4_url&#8221;.</li>
                    <li>Navigate to the SOILx Fusion Tables URL at the top of this document.</li>
                    <li>Select the &#8220;Sign In&#8221; button in the upper right.</li>
                    <li>Log in.</li>
                    <li>Select the &#8220;File&#8221; menu option near the left.</li>
                    <li>Select the &#8220;Import More Rows&#8221; option.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-04.png"><img class="aligncenter size-large wp-image-647" alt="doc-db-04" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-04-940x445.png" width="625" height="295" /></a></li>
                    <li>Select the &#8220;Choose File&#8221; option in the window that opens.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-05.png"><img class="aligncenter size-full wp-image-648" alt="doc-db-05" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-05.png" width="791" height="566" /></a></li>
                    <li>Select the &#8220;Next&#8221; option in the lower right. Fusion Tables will open a wide, wide window in which you can view your data as rows in the lower half.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-06.png"><img class="aligncenter size-large wp-image-649" alt="doc-db-06" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-06-940x312.png" width="625" height="207" /></a></li>
                    <li>Verify that the document importation has uploaded properly.</li>
                    <li>Select the &#8220;Finish&#8221; option. You may have to scroll to the right to see this button.</li>
                </ol>
                <p>&nbsp;</p>
                <h3>Editing a Single Soil Site</h3>
                <p>To edit a single soil site at the SOILx Fusion Tables table:</p>
                <ol>
                    <li>Navigate to the SOILx Fusion Tables URL at the top of this document.</li>
                    <li>Select the &#8220;Sign In&#8221; button in the upper right.</li>
                    <li>Log in.</li>
                    <li>Select the row which you want to edit (by clicking anywhere on it). Three little buttons should appear next to where you clicked.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-07.png"><img class="aligncenter size-large wp-image-650" alt="doc-db-07" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-07-940x399.png" width="625" height="265" /></a></li>
                    <li>Select the leftmost button, the one that looks like a pencil. The &#8220;Edit Row&#8221; window should appear.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-08.png"><img class="aligncenter size-full wp-image-651" alt="doc-db-08" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-db-08.png" width="587" height="611" /></a></li>
                    <li>Entire your edits in the appropriate fields.</li>
                    <li>Select the &#8220;Save&#8221; option to save your edits to the site.</li>
                </ol>
            </div>
            <div class="soilweb-tabs-pane" id="wordpress">
                <p>This page is the frontend documentation page for SOILx. It describes the origins of and how to edit in WordPress what the public sees on the SOILx site. It is the twin to the backend documentation page for the SOILx plugin.</p>
                <p>SOILx eight pages as of July 29, 2013:</p>
                <ol>
                    <li><span style="line-height: 14px;">Augmented Reality.</span></li>
                    <li>Help.</li>
                    <li>Home.</li>
                    <li>Map (automatically generated).</li>
                    <li>Results (automatically generated).</li>
                    <li>Search (automatically generated).</li>
                    <li>Site (automatically generated).</li>
                    <li>Team.</li>
                </ol>
                <p>These pages can be divided into two categories: those whose content is typed into WordPress by people and  those whose content is automatically generated from the SOILx plugin. You can make changes to both in WordPress, but most changes to automatically generated pages will require altering its plugin.</p>
                <h3>Editing a SOILx Page</h3>
                <p>To edit a people-generated SOILx page (like Augmented Reality, Help, Home, and Team), do the following steps:</p>
                <ol>
                    <li style="text-align: left;"><span style="line-height: 14px;"><strong>Select the &#8220;Pages&#8221; option</strong> to the left of WordPress in the Administrator area.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-01.png"><img class="size-medium wp-image-626 aligncenter" alt="doc-wp-01" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-01-284x300.png" width="284" height="300" /></a><br />
                    </span></li>
                    <li><strong>Hover your cursor</strong> over the page you wish to edit. Four options should appear below: &#8220;Edit&#8221;, &#8220;Quick Edit&#8221;, &#8220;Trash&#8221;, and &#8220;View&#8221;.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-02.png"><img class="size-medium wp-image-627 aligncenter" alt="doc-wp-02" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-02-342x300.png" width="342" height="300" /></a></li>
                    <li><strong>Select the &#8220;Edit&#8221; option</strong>. A busy window with a text box near the middle should appear. This text box displays the content the user sees on this page.<br />
                    <em><strong>NOTE:</strong> You may see text resembling &#8220;[shortcodelookslikethis]&#8221; on the page. This text is called &#8220;shortcode&#8221;. It is computer code responsible for communicating with the SOILx plugin. If you see it, immediately read the &#8220;Working with Shortcode &#8211; [shortcodelookslikethis]&#8221; section below.</em><br />
                    <em> <strong>NOTE:</strong> Some SOILx pages use tabs to display information. Pages that use tabs have the &#8216;maketabs&#8217; short code in front of them. If you see that, immediately read the &#8220;Working with Tabs&#8221; section below.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-03.png"><img class=" wp-image-628 aligncenter" alt="doc-wp-03" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-03.png" width="981" height="412" /></a><br />
                    </em></li>
                    <li><strong>Change the text in the text box</strong> to suit your purposes.<br />
                    <em><strong>NOTE:</strong> WordPress offers text editing in &#8220;Visual&#8221; and &#8220;Text&#8221; mode. Visual mode will display your text close to how it will appear to the public. Text mode will display your text with some of its HTML markups.</em></li>
                    <li><strong>Select the blue &#8220;Update&#8221; button</strong> near the upper right when you&#8217;re done.</li>
                    <li><strong>Examine</strong> your handiwork.</li>
                    <li><strong>Repeat</strong> the process as necessary.</li>
                </ol>
                <p>&nbsp;</p>
                <h3>Working with Tabs</h3>
                <p>Tabs allow a page to display multiple pages of information. Two SOILx pages use tabs as of August 18, 2013:</p>
                <ol>
                    <li><span style="line-height: 14px;">Results.</span></li>
                    <li>Help.</li>
                    </ol>
                    <p>To edit a page that uses tabs:</p>
                    <ol>
                    <li><span style="line-height: 14px;"><strong>Follow steps 1-3</strong> of the &#8220;Editing a SOILx Page&#8221; section.</span></li>
                    <li><strong>Select the &#8220;Text&#8221; option</strong> of editing text. The text should change to unformatted text with funny little markups like &#8220;&lt;ul&gt;&#8221; sprinkled liberally  throughout.<br />
                    <em><strong>NOTE:</strong> SOILx tabs require three bits of funny little markups: 1) the &#8216;maketabs&#8217; shortcode, 2) the code for the tab&#8217;s title (appearing near the top, looking like &#8220;&lt;li&gt;&lt;a href=&#8221;#X&#8221;&gt;&#8230;&lt;/a&gt;&lt;/li&gt;&#8221;), and 3) the tab&#8217;s text (appearing below the titles, looking like &#8220;&lt;div class=&#8221;soilweb-tabs-pane&#8221; id=&#8221;X&#8221;&gt;&#8230;&lt;/div&gt;&#8221;).<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-04.png"><img class="aligncenter size-full wp-image-629" alt="doc-wp-04" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-04.png" width="972" height="522" /></a><br />
                    </em></li>
                    <li><strong>To edit/insert text inside a tab</strong>:
                <ol>
                    <li><strong>Find</strong> where you want to edit/insert text. Hopefully it will be near some existing text. Definitely it must be between the &#8220;&lt;div class=&#8221;soilweb-tabs-pane&#8221; id=&#8221;X&#8221;&gt;&#8221; and &#8220;&lt;/div&gt;&#8221; markups mentioned above.</li>
                    <li><strong>Edit the text</strong>. Make sure that all edits occur above the nearest &#8220;&lt;/div&gt;&#8221; markup below where you edit.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-05.png"><img class="aligncenter size-full wp-image-630" alt="doc-wp-05" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-05.png" width="502" height="491" /></a></li>
                </ol>
                </li>
                <li><strong>To create a new tab</strong>:
                <ol>
                    <li><strong>Find</strong> where the titles for the page&#8217;s tabs are.<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-06.png"><img class="aligncenter size-full wp-image-631" alt="doc-wp-06" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-06.png" width="505" height="494" /></a></li>
                    <li><strong>Add a new line to the tabs section</strong> that looks like this:<br />
                    <em>&lt;li&gt;&lt;a href=&#8221;#X&#8221;&gt;&#8230;&lt;/a&gt;&lt;/li&gt;</em><br />
                    Replace &#8216;X&#8217; with a single-word description of the tab. Replace &#8216;&#8230;&#8217; with the text you want to appear in the tab.</li>
                    <li><strong>Scroll</strong> to the bottom of the page. You should see two &#8220;&lt;/div&#8221;&#8216;s on separate lines.</li>
                    <li>I<strong>nsert new code b</strong>etween those two &#8220;&lt;/div&gt;&#8221;s, i that looks like this:<br />
                    <em>&lt;div class=&#8221;soilweb-tabs-pane&#8221; id=&#8221;X&#8221;&gt;&#8230;&lt;/div&gt;</em><br />
                    Replace &#8216;X&#8217; with the single-word description you chose in section 2. They must match exactly for the tab to work. Replace the &#8216;&#8230;&#8217; with &#8220;TEXT WILL GO HERE.&#8221;<br />
                    <a href="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-07.png"><img class="aligncenter size-full wp-image-632" alt="doc-wp-07" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/08/doc-wp-07.png" width="506" height="494" /></a></li>
                    <li><strong>Switch back</strong> to the Visual editor to put in the rest of the text in this section, replacing &#8220;TEXT WILL GO HERE&#8221; with whatever text you want to appear in the pane.</li>
                </ol>
                </li>
                </ol>
                <p>&nbsp;</p>
                <h3>Working with Shortcode &#8211; [shortcodelookslikethis]</h3>
                <p>Shortcode is a string of letters inside brackets, like this: [shortcodelookslikethis]. When WordPress sees these brackets, it evaluates the text inside to see if it matches one of the shortcodes it has on file. If it matches, the SOILx offers the following shortcodes:</p>
                <ol>
                    <li><span style="line-height: 14px;"><strong>maketabs</strong> - enables tabs in a WordPress page. Used in the Help and Results pages. Used by the makeresults shortcode.</span></li>
                    <li><strong>makeaccordions</strong> - enables accordions in a WordPress page. Used in the Search and Site pages. Used by the makesearch and makesite shortcodes.</li>
                    <li><strong>makesearchtech</strong> &#8211; enables the underlying code for making a SOILx search page. Used in the Search page. Used by makesearch shortcode.</li>
                    <li><strong>makefilter</strong> &#8211; generates a quick filter/search pane. Used in the Map page.</li>
                    <li><strong>makelist</strong> &#8211; generates a list of SOILx soil sites in response to a search. If no search terms are passed in, returns a list of all SOILx soil sites. Used in the Results page. Used by makeresults shortcode.</li>
                    <li><strong>makemap</strong> &#8211; generates a map of SOILx soil sites in response to a search. If no search terms are passed in, returns a map of all SOILx soil sites. Used in the Results page. Used by makemap shortcode.</li>
                    <li><strong>makeresults</strong> &#8211; generates a tabbed page with a list and a map of SOILx soil sites in response to a search. If no search terms are passed in, returns a list and a map of all SOILx soil sites. Used in the Results page. Uses makemap, makelist, and maketabs shortcodes.</li>
                    <li><strong>makesearch</strong> &#8211; generates a formatted search page. Used in the Search page. Uses makesearchtech and makesaccordions shortcode.</li>
                    <li><strong>makesite</strong> &#8211; generates a formatted SOILx soil site page. Used in the Site page. Uses makeaccordions shortcode.</li>
                </ol>
                <p>To use any of them, type in the shortcode between brackets wherever you want content generated by that shortcode to appear, like this: [shortcodelookslikethis]. The pane below is a result of using the &#8216;makefilter&#8217; shortcode in this documentation:</p>

                <div class="soilweb-filter">
                
                    <div id="filter-left">
                        <h3>Quick Filter: </h3>
                    </div>
                    
                    <div id="filter-middle">
                        <form name="filter" action="../results/?search=1823983703" method="get">
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
                                <option value="Continental">Continental</option>
                            </select>
                            
                            <select name="bc_biogeoclimatic_zone">
                                <option value="">BC Biogeoclimatic Zone</option>
                                <option value="">---</option>
                                <option value="Alpine Tundra">Alpine Tundra</option>
                                <option value="Boreal White and Black Spruce">Boreal White and Black Spruce</option>
                                <option value="Bunchgrass">Bunchgrass</option>
                                <option value="Coastal Douglas-fir">Coastal Douglas-fir</option>
                                <option value="Coastal Western Hemlock">Coastal Western Hemlock</option>
                                <option value="Engelmann Spruce-Subalpine Fir">Engelmann Spruce-Subalpine Fir</option>
                                <option value="Interior Cedar-Hemlock">Interior Cedar-Hemlock</option>
                                <option value="Interior Douglas-fir">Interior Douglas-fir</option>
                                <option value="Montane Spruce">Montane Spruce</option>
                                <option value="Mountain Hemlock">Mountain Hemlock</option>
                                <option value="Ponderosa Pine">Ponderosa Pine</option>
                                <option value="Sub-Boreal Pine-Spruce">Sub-Boreal Pine-Spruce</option>
                                <option value="Sub-Boreal Spruce">Sub-Boreal Spruce</option>
                                <option value="Spruce-Willow-Birch">Spruce-Willow-Birch</option>
                            </select>
                    </div>
                            
                    <div id="filter-right">
                            <input type="submit" value="Filter All Sites">
                            <input type="reset" value="Reset Filters" />
                        </form>
                    </div>
                </div>
                <p>&nbsp;</p>
                <p>If you want to use any shortcode, remember also to include the short codes upon which it depends. Almost all of the entire site can be recreated in a few lines if you have the SOILx plugin.</p>
            </div>
            <div class="soilweb-tabs-pane" id="plugin">
                <p>This page is the backend documentation page for SOILx. It describes the origins of and how to edit the SOILx plugin. It is the twin to the frontend documentation page for the SOILx WordPress site.</p>
                <p>The SOILx plugin has eight files as of July 29, 2013:</p>
                <ol>
                    <li><strong>soilweb-main-plugin.php</strong> &#8211; defines interaction with SOILx Fusion Table, enqueues other SOILx plugin files for use, and declares shortcodes for content and behavior of site.</li>
                    <li><strong>soilweb-instruction-maker.php</strong> &#8211; provides instructions for SOILx to soilweb-main-plugin.</li>
                    <li><strong>soilweb-armlmaker.php</strong> &#8211; generates an ARML file for Wikitude augmented reality app.</li>
                    <li><strong>soilweb-style.css</strong> &#8211; defines the look of placement of shortcode-generated content.</li>
                    <li><strong>soilweb-accordions.js</strong> &#8211; defines jQuery UI accordion behavior for certain named SOILx elements.</li>
                    <li><strong>soilweb-tabs.js</strong> &#8211; defines jQuery UI tab behavior for certain named SOILx elements.</li>
                    <li><strong>soilweb-list.js</strong> &#8211; generates responsive form elements for Soil Order, Great Group, and Subgroup named elements. Used in Search page and makesearch shortcode.</li>
                    <li><strong>soilweb-maps.js</strong> &#8211; generates Fusion Tables query for automatically centered and zoomed SOILx maps. Used in Maps page and Results page and by makemap shortcode.</li>
                </ol>
                <p>These files communicate with a Google Fusion Tables table. To learn more about the SOILx Fuion Table, read the Fusion Tables documentation page.</p>
                <p>To learn more about functions within each plugin and how they interact with the Fusion Tables database, examine the files and their comments. They are, as of July 29, 2013, available here:</p>
                <p>https://github.com/nathansidles/soilweb</p>
                <p>They have also been made available to Saeed Dyanatkar, who should have a backup.</p>
                <p>In case of direst emergency, contact Nathan Sidles at nsidles@gmail.com.</p>
            </div>
            <div class="soilweb-tabs-pane" id="images">
                <p>This page tells you how to upload and incorporate soil site images into SOILx.</p>
                <p>To show pictures associated with SOILx, the Fusion Table database needs a stable URL, or address, at which they are hosted, so it can look them up. Most SOILx pictures are hosted on the site itself, but they don&#8217;t have to be. If soil sites are supplied with photo URLs already supplied, you don&#8217;t need to worry about it &#8211; hosting them is someone else&#8217;s problem.</p>
                <p><strong>NOTE: When uploading images, make sure that they are small. Otherwise, they may load extremely slowly for mobile users.</strong></p>
                <h3>Uploading Images</h3>
                <p>To upload images to SOILx:</p>
                <ol>
                    <li>Select the &#8220;Media&#8221; option to the left of the screen and click add new.<br />
                    <img class="aligncenter size-full wp-image-732" alt="img-01" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/09/img-01.png" width="310" height="247" /></li>
                    <li>Select the &#8220;Select Files&#8221; option that appears in the middle of the window.<br />
                    <img class="aligncenter size-full wp-image-731" alt="img-02" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/09/img-02.png" width="884" height="379" /></li>
                    <li>Select the &#8220;Edit&#8221; option that appears next to the images name below the large dotted box when the file has uploaded completely. A blue bar will appear while the image is loading.<br />
                    <img class="aligncenter size-full wp-image-730" alt="img-03" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/09/img-03.png" width="883" height="417" /></li>
                    <li>Select and copy the URL that appears to the right of the screen after the picture&#8217;s page has loaded.<br />
                    <img class="aligncenter size-full wp-image-729" alt="img-04" src="http://ar-soilweb.sites.olt.ubc.ca/files/2013/09/img-04.png" width="882" height="441" /></li>
                    <li>Paste this URL into the appropriate field of the soil site with which you want to associate this image.</li>
                </ol>
            </div>
    
    ';
    
?>