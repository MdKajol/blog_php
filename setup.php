<?php

if( !defined( 'SERVER_ROOT' ) ) {
    define( 'SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/sites/blog_php/' );
}
if( !file_exists( SERVER_ROOT. 'config.php' ) ) {
    echo "Error: file is missing 'config.php'";
    exit;
} else {
    require_once( SERVER_ROOT  . 'config.php' );
}



?>