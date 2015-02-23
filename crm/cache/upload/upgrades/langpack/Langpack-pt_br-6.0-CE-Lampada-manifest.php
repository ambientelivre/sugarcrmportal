<?PHP
// manifest file for information regarding application of new code
$manifest = array(
	  // only install on the following regex sugar versions (if empty, no check)
    'acceptable_sugar_versions' =>
    array (
        'exact_matches' =>
        array (
        ),
        'regex_matches' =>
        array (
	0 => '6\.*',
        ),
    ),
    'acceptable_sugar_flavors' =>
    array (
		0 => 'CE',
    ),

    // name of new code
    'name' => 'Lampada Brazilian Language Pack',

    // description of new code
    'description' => 'Brazilian Portuguese Language Pack',

    // author of new code
    'author' => 'Lampada Global Services',

    // date published
    'published_date' => '02/08/2010',

    // version of code
    'version' => '6.0',

    // type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    'is_uninstallable' => TRUE,

);

$installdefs = array(
	'id'=> 'pt_br',
	);
?>