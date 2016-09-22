
     /**
     *
     * This code will insert a location into thk ontology
     * The input base on a file ../forms/form_location.html
     *
     * @package         Input
     * @copyright       Copyright (c) 2016 Cokorda Pramartha
     * @developer       cokorda@oss.web.id
     * @license         GNU
     */

        set_include_path(get_include_path() . PATH_SEPARATOR . '../../easyrdf/lib/');
        require_once "EasyRdf.php";
        require_once "../../easyrdf/examples/html_tag_helpers.php";

// Setup prefix
EasyRdf_Namespace::set ('rdf' , 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf_Namespace::set ('owl' , 'http://www.w3.org/2002/07/owl#');
EasyRdf_Namespace::set ('rdfs' , 'http://www.w3.org/2000/01/rdf-schema#');
EasyRdf_Namespace::set ('thk' ,  'http://dpch.oss.web.id/Bali/TriHitaKarana.owl#');
EasyRdf_Namespace::set {'vcard' , 'http://www.w3.org/2006/vcard/ns#');

//Setup update connection to triple store end point
    $thk_update = new EasyRdf_Sparql_Client('http://dpch.oss.web.id:3030/thk/update');
?>
