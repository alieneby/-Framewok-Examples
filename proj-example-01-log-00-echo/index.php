<?php 
require_once('Config.php');
require_once( Config::$_strAlien . '/Alien.php' );

echo "\n<html><body><pre>\n";
echo "Super simple example!\n";

Log::always( 'This will always be logged');
Log::info( 'This will be logged, if Config::debug is true');
Log::error( 'This will be logged always as error');
Log::systemError( 'Bad system error example'  );

echo "Please check your php system log: " . ini_get( 'error_log' ) . "\n";

echo "plain debug trace:\n";
echo Log::toString();
echo "\n\n";

echo "html debug trace:\n";
echo Log::toHtml();
echo "\n\n";

echo "</pre></body></html>\n\n";

👽::🖖();
