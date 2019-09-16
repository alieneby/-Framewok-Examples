<?php 

class Config {
    static $_strAlien = '../aliencode'; // where is the alienframework?
    static $_fDebug = true;
    static $_fSytemErrorDirectOutput = true; // print system errors into the output stream
    static $_strAbsPath; // WILL BE SET IN init()!!    

    static function init() {
        self::$_strAbsPath = dirname( __FILE__ );    
    }
}

Config::init();