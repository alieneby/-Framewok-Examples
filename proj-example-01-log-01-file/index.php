<?php 
require_once('Config.php');
require_once( Config::$_strAlien . '/Alien.php' );

echo "\n<html><body><pre>\n";
echo "Super simple example!\n";

Log::always( 'This will always be logged');
Log::info( 'This will be logged, if Config::debug is true');
Log::error( 'This will be logged always as error');
Log::systemError( 'bad bad error'  );

echo "Please open php system log: " . ini_get( 'error_log' ) . "\n";
echo "and your debug log file: " . Config::$_strDebugLog. " !\n";
echo "</pre></body></html>\n\n";

👽::🖖();
