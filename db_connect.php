<?php

	// Defining Constants
	define( 'HOST', 'localhost' );
	define( 'DB', 'Airplane Management' );
	define( 'USER', 'root' );
	define( 'PASS', '' );
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
?>