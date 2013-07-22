// Initializes the soil_order field with all soil orders

function soilweb_fill_soil_order(){
    soilweb_add_option(document.soilweb_search.soil_order, "Brunisol", "Brunisol", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Chernozem", "Chernozem", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Cryosol", "Cryosol", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Gleysol", "Gleysol", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Luvisol", "Luvisol", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Organic", "Organic", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Podzol", "Podzol", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Regosol", "Regosol", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Solonetz", "Solonetz", "");
    soilweb_add_option(document.soilweb_search.soil_order, "Vertisol", "Vertisol", "");
}

// Removes all options from the great_group field and puts in the conditional values

function soilweb_select_great_group(){

    soilweb_remove_all_options(document.soilweb_search.great_group);
    soilweb_add_option(document.soilweb_search.great_group, "", "Great Group", "");
    
    soilweb_remove_all_options(document.soilweb_search.subgroup);
    soilweb_add_option(document.soilweb_search.subgroup, "", "Subgroup", "");

    if(document.soilweb_search.soil_order.value == 'Brunisol'){
        soilweb_add_option(document.soilweb_search.great_group,"Melanic Brunisol", "Melanic Brunisol");
        soilweb_add_option(document.soilweb_search.great_group,"Eutric Brunisol", "Eutric Brunisol");
        soilweb_add_option(document.soilweb_search.great_group,"Sombric Brunisol", "Sombric Brunisol");
        soilweb_add_option(document.soilweb_search.great_group,"Dystric Brunisol", "Dystric Brunisol");
    }
    if(document.soilweb_search.soil_order.value == 'Chernozem'){
        soilweb_add_option(document.soilweb_search.great_group,"Brown Chernozem", "Brown Chernozem");
        soilweb_add_option(document.soilweb_search.great_group,"Dark Brown Chernozem", "Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.great_group,"Black Chernozem", "Black Chernozem");
        soilweb_add_option(document.soilweb_search.great_group,"Dark Gray Chernozem", "Dark Gray Chernozem");
    }
    if(document.soilweb_search.soil_order.value == 'Cryosol'){
        soilweb_add_option(document.soilweb_search.great_group,"Turbic Cryosol", "Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.great_group,"Static Cryosol", "Static Cryosol");
        soilweb_add_option(document.soilweb_search.great_group,"Organic Cryosol", "Organic Cryosol");
    }
    if(document.soilweb_search.soil_order.value == 'Gleysol'){
        soilweb_add_option(document.soilweb_search.great_group,"Luvic Gleysol", "Luvic Gleysol");
        soilweb_add_option(document.soilweb_search.great_group,"Humic Gleysol", "Humic Gleysol");
        soilweb_add_option(document.soilweb_search.great_group,"Gleysol", "Gleysol");
    }
    if(document.soilweb_search.soil_order.value == 'Luvisol'){
        soilweb_add_option(document.soilweb_search.great_group,"Gray Brown Luvisol", "Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.great_group,"Gray Luvisol", "Gray Luvisol");
    }
    if(document.soilweb_search.soil_order.value == 'Organic'){
        soilweb_add_option(document.soilweb_search.great_group,"Fibrisol Organic", "Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.great_group,"Mesisol Organic", "Mesisol Organic");
        soilweb_add_option(document.soilweb_search.great_group,"Humisol Organic", "Humisol Organic");
        soilweb_add_option(document.soilweb_search.great_group,"Folisol Organic", "Folisol Organic");
    }
    if(document.soilweb_search.soil_order.value == 'Podzol'){
        soilweb_add_option(document.soilweb_search.great_group,"Humo-Ferric Podzol", "Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.great_group,"Humic Podzol", "Humic Podzol");
        soilweb_add_option(document.soilweb_search.great_group,"Ferro-Humic Podzol", "Ferro-Humic Podzol");
    }
    if(document.soilweb_search.soil_order.value == 'Regosol'){
        soilweb_add_option(document.soilweb_search.great_group,"Regosol", "Regosol");
        soilweb_add_option(document.soilweb_search.great_group,"Humic Regosol", "Humic Regosol");
    }
    if(document.soilweb_search.soil_order.value == 'Solonetz'){
        soilweb_add_option(document.soilweb_search.great_group,"Solonetz", "Solonetz");
        soilweb_add_option(document.soilweb_search.great_group,"Solodized Solonetz", "Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.great_group,"Solod Solonetz", "Solod Solonetz");
        soilweb_add_option(document.soilweb_search.great_group,"Vertic Solonetz", "Vertic Solonetz");
    }
    if(document.soilweb_search.soil_order.value == 'Vertisol'){
        soilweb_add_option(document.soilweb_search.great_group,"Vertisol", "Vertisol");
        soilweb_add_option(document.soilweb_search.great_group,"Humic Vertisol", "Humic Vertisol");
    }
}

// Removes all options from the subgroup field and puts in the conditional values

function soilweb_select_subgroup(){

    soilweb_remove_all_options(document.soilweb_search.subgroup);
    soilweb_add_option(document.soilweb_search.subgroup, "", "Subgroup", "");
    
    if(document.soilweb_search.great_group.value == 'Melanic Brunisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Melanic Brunisol", "Orthic Melanic Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Melanic Brunisol", "Eluviated Melanic Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Melanic Brunisol", "Gleyed Melanic Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Melanic Brunisol", "Gleyed Eluviated Melanic Brunisol");
    }
    if(document.soilweb_search.great_group.value == 'Eutric Brunisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Eutric Brunisol", "Orthic Eutric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Eutric Brunisol", "Eluviated Eutric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eutric Brunisol", "Gleyed Eutric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Eutric Brunisol", "Gleyed Eluviated Eutric Brunisol");
    }
    if(document.soilweb_search.great_group.value == 'Sombric Brunisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Sombric Brunisol", "Orthic Sombric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Sombric Brunisol", "Eluviated Sombric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Duric Sombric Brunisol", "Duric Sombric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Sombric Brunisol", "Gleyed Sombric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Sombric Brunisol", "Gleyed Eluviated Sombric Brunisol");
    }
    if(document.soilweb_search.great_group.value == 'Dystric Brunisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Dystric Brunisol", "Orthic Dystric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Dystric Brunisol", "Eluviated Dystric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Duric Dystric Brunisol", "Duric Dystric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dystric Brunisol", "Gleyed Dystric Brunisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Dystric Brunisol", "Gleyed Eluviated Dystric Brunisol");
    }
    if(document.soilweb_search.great_group.value == 'Brown Chernozem') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Brown Chernozem", "Orthic Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Rego Brown Chernozem", "Rego Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Calcareous Brown Chernozem", "Calcareous Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Brown Chernozem", "Eluviated Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Brown Chernozem", "Solonetzic Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Brown Chernozem", "Vertic Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brown Chernozem", "Gleyed Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Rego Brown Chernozem", "Gleyed Rego Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Calcareous Brown Chernozem", "Gleyed Calcareous Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Brown Chernozem", "Gleyed Eluviated Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Solonetzic Brown Chernozem", "Gleyed Solonetzic Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertic Brown Chernozem", "Gleyed Vertic Brown Chernozem");
    }
    if(document.soilweb_search.great_group.value == 'Dark Brown Chernozem') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Dark Brown Chernozem", "Orthic Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Rego Dark Brown Chernozem", "Rego Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Calcareous Dark Brown Chernozem", "Calcareous Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Dark Brown Chernozem", "Eluviated Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Dark Brown Chernozem", "Solonetzic Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Dark Brown Chernozem", "Vertic Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Brown Chernozem", "Gleyed Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Rego Dark Brown Chernozem", "Gleyed Rego Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Calcareous Dark Brown Chernozem", "Gleyed Calcareous Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Dark Brown Chernozem", "Gleyed Eluviated Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Solonetzic Dark Brown Chernozem", "Gleyed Solonetzic Dark Brown Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertic Dark Brown Chernozem", "Gleyed Vertic Dark Brown Chernozem");
    }
    if(document.soilweb_search.great_group.value == 'Black Chernozem') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Black Chernozem", "Orthic Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Rego Black Chernozem", "Rego Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Calcareous Black Chernozem", "Calcareous Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Eluviated Black Chernozem", "Eluviated Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Black Chernozem", "Solonetzic Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Black Chernozem", "Vertic Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Black Chernozem", "Gleyed Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Rego Black Chernozem", "Gleyed Rego Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Calcareous Black Chernozem", "Gleyed Calcareous Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Eluviated Black Chernozem", "Gleyed Eluviated Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Solonetzic Black Chernozem", "Gleyed Solonetzic Black Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertic Black Chernozem", "Gleyed Vertic Black Chernozem");
    }
    if(document.soilweb_search.great_group.value == 'Dark Gray Chernozem') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Dark Gray Chernozem", "Orthic Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Rego Dark Gray Chernozem", "Rego Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Calcareous Dark Gray Chernozem", "Calcareous Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Dark Gray Chernozem", "Solonetzic Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Dark Gray Chernozem", "Vertic Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Gray Chernozem", "Gleyed Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Rego Dark Gray Chernozem", "Gleyed Rego Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Calcareous Dark Gray Chernozem", "Gleyed Calcareous Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Solonetzic Dark Gray Chernozem", "Gleyed Solonetzic Dark Gray Chernozem");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertic Dark Gray Chernozem", "Gleyed Vertic Dark Gray Chernozem");
    }
    if(document.soilweb_search.great_group.value == 'Turbic Cryosol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Eutric Turbic Cryosol", "Orthic Eutric Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Dystric Turbic Cryosol", "Orthic Dystric Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Brunisolic Eutric Turbic Cryosol", "Brunisolic Eutric Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Brunisolic Dystric Turbic Cryosol", "Brunisolic Dystric Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleysolic Turbic Cryosol", "Gleysolic Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Regosolic Turbic Cryosol", "Regosolic Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Eutric Turbic Cryosol", "Histic Eutric Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Dystric Turbic Cryosol", "Histic Dystric Turbic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Regosolic Turbic Cryosol", "Histic Regosolic Turbic Cryosol");
    }
    if(document.soilweb_search.great_group.value == 'Static Cryosol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Eutric Static Cryosol", "Orthic Eutric Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Dystric Static Cryosol", "Orthic Dystric Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Brunisolic Static Cryosol", "Brunisolic Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Brunisolic Dystric Static Cryosol", "Brunisolic Dystric Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Luvisolic Static Cryosol", "Luvisolic Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleysolic Static Cryosol", "Gleysolic Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Regosolic Static Cryosol", "Regosolic Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Eutric Static Cryosol", "Histic Eutric Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Dystric Static Cryosol", "Histic Dystric Static Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Regosolic Static Cryosol", "Histic Regosolic Static Cryosol");
    }
    if(document.soilweb_search.great_group.value == 'Organic Cryosol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Fibric Organic Cryosol", "Fibric Organic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Mesic Organic Cryosol", "Mesic Organic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Humic Organic Cryosol", "Humic Organic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Fibric Organic Cryosol", "Terric Fibric Organic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Mesic Organic Cryosol", "Terric Mesic Organic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Humic Organic Cryosol", "Terric Humic Organic Cryosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Glacic Organic Cryosol", "Glacic Organic Cryosol");
    }
    if(document.soilweb_search.great_group.value == 'Luvic Gleysol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Luvic Gleysol", "Vertic Luvic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Luvic Gleysol", "Solonetzic Luvic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fragic Luvic Gleysol", "Fragic Luvic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Humic Luvic Gleysol", "Humic Luvic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fera Luvic Gleysol", "Fera Luvic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Luvic Gleysol", "Orthic Luvic Gleysol");
    }
    if(document.soilweb_search.great_group.value == 'Humic Gleysol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Humic Gleysol", "Vertic Humic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Humic Gleysol", "Solonetzic Humic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fera Humic Gleysol", "Fera Humic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Humic Gleysol", "Orthic Humic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Rego Humic Gleysol", "Rego Humic Gleysol");
    }
    if(document.soilweb_search.great_group.value == 'Gleysol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Gleysol", "Vertic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Gleysol", "Solonetzic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fera Gleysol", "Fera Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Gleysol", "Orthic Gleysol");
        soilweb_add_option(document.soilweb_search.subgroup,"Rego Gleysol", "Rego Gleysol");
    }
    if(document.soilweb_search.great_group.value == 'Gray Brown Luvisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Gray Brown Luvisol", "Orthic Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Brunisolic Gray Brown Luvisol", "Brunisolic Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Podzolic Gray Brown Luvisol", "Podzolic Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Gray Brown Luvisol", "Vertic Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Gray Brown Luvisol", "Gleyed Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brunisolic Gray Brown Luvisol", "Gleyed Brunisolic Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Podzolic Gray Brown Luvisol", "Gleyed Podzolic Gray Brown Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertic Gray Brown Luvisol", "Gleyed Vertic Gray Brown Luvisol");
    }
    if(document.soilweb_search.great_group.value == 'Gray Luvisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Gray Luvisol", "Orthic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Gray Luvisol", "Dark Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Brunisolic Gray Luvisol", "Brunisolic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Podzolic Gray Luvisol", "Podzolic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Solonetzic Gray Luvisol", "Solonetzic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fragic Gray Luvisol", "Fragic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Vertic Gray Luvisol", "Vertic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Gray Luvisol", "Gleyed Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Gray Luvisol", "Gleyed Dark Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brunisolic Gray Luvisol", "Gleyed Brunisolic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Podzolic Gray Luvisol", "Gleyed Podzolic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Solonetzic Gray Luvisol", "Gleyed Solonetzic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Fragic Gray Luvisol", "Gleyed Fragic Gray Luvisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertic Gray Luvisol", "Gleyed Vertic Gray Luvisol");
    }
    if(document.soilweb_search.great_group.value == 'Fibrisol Organic') {
        soilweb_add_option(document.soilweb_search.subgroup,"Typic Fibrisol Organic", "Typic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Mesic Fibrisol Organic", "Mesic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Humic Fibrisol Organic", "Humic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Limnic Fibrisol Organic", "Limnic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Cumulic Fibrisol Organic", "Cumulic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Fibrisol Organic", "Terric Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Mesic Fibrisol Organic", "Terric Mesic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Humic Fibrisol Organic", "Terric Humic Fibrisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Hydric Fibrisol Organic", "Hydric Fibrisol Organic");
    }
    if(document.soilweb_search.great_group.value == 'Mesisol Organic') {
        soilweb_add_option(document.soilweb_search.subgroup,"Typic Mesisol Organic", "Typic Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Fibric Mesisol Organic", "Fibric Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Humic Mesisol Organic", "Humic Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Limnic Mesisol Organic", "Limnic Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Cumulic Mesisol Organic", "Cumulic Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Mesisol Organic", "Terric Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Fibric Mesisol Organic", "Terric Fibric Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Humic Mesisol Organic", "Terric Humic Mesisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Hydric Mesisol Organic", "Hydric Mesisol Organic");
    }
    if(document.soilweb_search.great_group.value == 'Humisol Organic') {
        soilweb_add_option(document.soilweb_search.subgroup,"Typic Humisol Organic", "Typic Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Fibric Humisol Organic", "Fibric Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Mesic Humisol Organic", "Mesic Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Limnic Humisol Organic", "Limnic Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Cumulic Humisol Organic", "Cumulic Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Humisol Organic", "Terric Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Fibric Humisol Organic", "Terric Fibric Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Terric Mesic Humisol Organic", "Terric Mesic Humisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Hydric Humisol Organic", "Hydric Humisol Organic");
    }
    if(document.soilweb_search.great_group.value == 'Folisol Organic') {
        soilweb_add_option(document.soilweb_search.subgroup,"Hemic Folisol Organic", "Hemic Folisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Humic Folisol Organic", "Humic Folisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Lignic Folisol Organic", "Lignic Folisol Organic");
        soilweb_add_option(document.soilweb_search.subgroup,"Histic Folisol Organic", "Histic Folisol Organic");
    }
    if(document.soilweb_search.great_group.value == 'Humic Podzol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Humic Podzol", "Orthic Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Ortstein Humic Podzol", "Ortstein Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Placic Humic Podzol", "Placic Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Duric Humic Podzol", "Duric Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fragic Humic Podzol", "Fragic Humic Podzol");
    }
    if(document.soilweb_search.great_group.value == 'Ferro-Humic Podzol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Ferro-Humic Podzol", "Orthic Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Ortstein Ferro-Humic Podzol", "Ortstein Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Placic Ferro-Humic Podzol", "Placic Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Duric Ferro-Humic Podzol", "Duric Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fragic Ferro-Humic Podzol", "Fragic Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Luvisolic Ferro-Humic Podzol", "Luvisolic Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Sombric Ferro-Humic Podzol", "Sombric Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Ferro-Humic Podzol", "Gleyed Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Ortstein Ferro-Humic Podzol", "Gleyed Ortstein Ferro-Humic Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Sombric Ferro-Humic Podzol", "Gleyed Sombric Ferro-Humic Podzol");
    }
    if(document.soilweb_search.great_group.value == 'Humo-Ferric Podzol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Humo-Ferric Podzol", "Orthic Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Ortstein Humo-Ferric Podzol", "Ortstein Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Placic Humo-Ferric Podzol", "Placic Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Duric Humo-Ferric Podzol", "Duric Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Fragic Humo-Ferric Podzol", "Fragic Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Luvisolic Humo-Ferric Podzol", "Luvisolic Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Sombric Humo-Ferric Podzol", "Sombric Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Humo-Ferric Podzol", "Gleyed Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Ortstein Humo-Ferric Podzol", "Gleyed Ortstein Humo-Ferric Podzol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Sombric Humo-Ferric Podzol", "Gleyed Sombric Humo-Ferric Podzol");
    }
    if(document.soilweb_search.great_group.value == 'Regosol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Regosol", "Orthic Regosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Cumulic Regosol", "Cumulic Regosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Regosol", "Gleyed Regosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Cumulic Regosol", "Gleyed Cumulic Regosol");
    }
    if(document.soilweb_search.great_group.value == 'Humic Regosol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Humic Regosol", "Orthic Humic Regosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Cumulic Humic Regosol", "Cumulic Humic Regosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Humic Regosol", "Gleyed Humic Regosol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Cumulic Humic Regosol", "Gleyed Cumulic Humic Regosol");
    }
    if(document.soilweb_search.great_group.value == 'Solonetz') {
        soilweb_add_option(document.soilweb_search.subgroup,"Brown Solonetz", "Brown Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Brown Solonetz", "Dark Brown Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Black Solonetz", "Black Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Alkaline Solonetz", "Alkaline Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brown Solonetz", "Gleyed Brown Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Brown Solonetz", "Gleyed Dark Brown Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Black Solonetz", "Gleyed Black Solonetz");
    }
    if(document.soilweb_search.great_group.value == 'Solodized Solonetz') {
        soilweb_add_option(document.soilweb_search.subgroup,"Brown Solodized Solonetz", "Brown Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Brown Solodized Solonetz", "Dark Brown Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Black Solodized Solonetz", "Black Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Gray Solodized Solonetz", "Dark Gray Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gray Solodized Solonetz", "Gray Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brown Solodized Solonetz", "Gleyed Brown Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Brown Solodized Solonetz", "Gleyed Dark Brown Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Black Solodized Solonetz", "Gleyed Black Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Gray Solodized Solonetz", "Gleyed Dark Gray Solodized Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Gray Solodized Solonetz", "Gleyed Gray Solodized Solonetz");
    }
    if(document.soilweb_search.great_group.value == 'Solod Solonetz') {
        soilweb_add_option(document.soilweb_search.subgroup,"Brown Solod Solonetz", "Brown Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Brown Solod Solonetz", "Dark Brown Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Black Solod Solonetz", "Black Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Gray Solod Solonetz", "Dark Gray Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gray Solod Solonetz", "Gray Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brown Solod Solonetz", "Gleyed Brown Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Brown Solod Solonetz", "Gleyed Dark Brown Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Black Solod Solonetz", "Gleyed Black Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Gray Solod Solonetz", "Gleyed Dark Gray Solod Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Gray Solod Solonetz", "Gleyed Gray Solod Solonetz");
    }
    if(document.soilweb_search.great_group.value == 'Vertic Solonetz') {
        soilweb_add_option(document.soilweb_search.subgroup,"Brown Vertic Solonetz", "Brown Vertic Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Dark Brown Vertic Solonetz", "Dark Brown Vertic Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Black Vertic Solonetz", "Black Vertic Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Brown Vertic Solonetz", "Gleyed Brown Vertic Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Dark Brown Vertic Solonetz", "Gleyed Dark Brown Vertic Solonetz");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Black Vertic Solonetz", "Gleyed Black Vertic Solonetz");
    }
    if(document.soilweb_search.great_group.value == 'Vertisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Vertisol", "Orthic Vertisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Vertisol", "Gleyed Vertisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleysolic Vertisol", "Gleysolic Vertisol");
    }
    if(document.soilweb_search.great_group.value == 'Humic Vertisol') {
        soilweb_add_option(document.soilweb_search.subgroup,"Orthic Humic Vertisol", "Orthic Humic Vertisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleyed Humic Vertisol", "Gleyed Humic Vertisol");
        soilweb_add_option(document.soilweb_search.subgroup,"Gleysolic Humic Vertisol", "Gleysolic Humic Vertisol");
    }
}

// Removes all options from a drop-down list

function soilweb_remove_all_options(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}

// Adds an option to the drop-down list

function soilweb_add_option(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}

// Calls the initialization of the Soil Order field on the page's load

window.onload = soilweb_fill_soil_order;