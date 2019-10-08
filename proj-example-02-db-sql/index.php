<?php
require_once( 'Config.php' );
require_once( 'Alien.php' );

$strAllTables = dbQueryOneStrSeparated( "show tables" );

if ( strpos( $strAllTables, 'mytest' ) === false ) {

    dbQuery( "CREATE TABLE mytest (
                  id int(11) NOT NULL,
                  txt varchar(3) NOT NULL
                )" );

    dbQuery( "INSERT INTO `mytest` (`id`, `txt`) VALUES ('1', 'a')");
}

$nCountRows = 0 + dbQueryOneStr( "select count(*) from alien.mytest" );

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
