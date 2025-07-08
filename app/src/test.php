<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    echo "start test";

    include ('StickyApi.php');
    
    $sticky = new Sticky("demoapi", "NHepu6pkBqbcrU", "hello");

    echo $sticky->validate_credentials();
