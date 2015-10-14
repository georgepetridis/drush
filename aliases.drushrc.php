<?php
// Production Details
$prod = array(
	'root' => '',
	'uri' => '',
	'user' => '',
	'host' => '',
);
// Development
$dev = array(
	'root' => '',
	'uri' => '',
);
// Common tables not to sync from production to development
$common = array(
    'cache', 
    'cache_block', 
    'cache_bootstrap', 
    'cache_field', 
    'cache_filter', 
    'cache_form', 
    'cache_image', 
    'cache_menu', 
    'cache_page', 
    'cache_path', 
    'history', 
    'sessions', 
    'watchdog', 
    'search_index',
);
$aliases['prod'] = array(
	'root' => $prod['root'],
	'uri' => $prod['uri'],
	'remote-user' => $prod['user'],
	'remote-host' => $prod['host'],
	'os' => 'Linux',
	'command-specific' => array(
	    'sql-sync' => array(
	        'no-cache' => TRUE,
	        'structure-tables' => array(
	            'common' => $common 
	        ),
	    ),
	    'sql-dump' => array(
	        'structure-tables' => array(
	            'common' => $common  
	        ),
	    ),
	),
);
$aliases['dev'] = array (
	'root' => $dev['root'],
	'uri' => $dev['uri'],
	'command-specific' => array(
	    'sql-sync' => array(
	        'no-cache' => TRUE,
	        'structure-tables' => array(
	            'common' => $common
	        ),
	    ),
	    'sql-dump' => array(
	        'structure-tables' => array(
	            'common' => $common  
	        ),
	    ),
	),
);
