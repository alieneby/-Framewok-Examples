<?php 
require_once('Config.php');
require_once( Config::$_strAlien . '/Alien.php' );


$nCountRows = 0 + dbQueryOneStr("select count(*) from blws.blws_requests" ) ;


echo "\n<html><body><pre>\n";
echo "Super simple database example!\n";
echo "Table has $nCountRows rows!\n";
echo "Debug data:\n";
print_r( Log::toLogLines() ); 
echo "</pre></body></html>\n\n";

Log::info( 'test' );

👽::🖖( 
    $strLastLogMessage = '', 
    $nHttpErrCode = 0, 
    $strOutput = "",
    __METHOD__, __LINE__, __FILE__
);
