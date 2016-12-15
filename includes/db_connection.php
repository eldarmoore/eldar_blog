<?php

    // DB Connection
    define("DB_SERVER", "localhost" );
    define("DB_USER",   "root"      );
    define("DB_PASS",   ""      );
    define("DB_NAME",   "eldar_blog");

    // Create a database connection
    $dbc = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

?>
