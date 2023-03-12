<?php

    // SETTING UP CONNECTION FROM THE DATABASE TO THE PHP FILE \\

    // ** MySQL hostname **
	define( 'DB_HOST', 'localhost:3307' );
  
	// ** MySQL database name **
	define( 'DB_NAME', 'remix_software' );

	// ** MySQL database username **
	define( 'DB_USER', 'nikell' );

	// ** MySQL database password **
	define( 'DB_PASSWORD', 'uwZ_!Q4Wj@@EnElP' );
	
	 
	$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// Check connection
	if ($con -> connect_errno) {
		echo "Failed to connect to MySQL server: " . $con -> connect_error;
		exit();
	}

?>