<?php 

class Config {
    static $_fIsProduction; // WILL BE SET IN init()!!
    static $_strAbsPath; // WILL BE SET IN init()!!
    static $_strServerName; // WILL BE SET IN init()!!

    static $_strAlien = '../../alien-framework-code'; // where is the alienframework?
    static $_fDebug = true;
    static $_fSytemErrorDirectOutput = true; // print system errors into the output stream

    static function init() {
        self::$_strAbsPath = dirname( __FILE__ );
        Config::$_strAbsPath = realpath( dirname( __FILE__ ) );
        Config::$_strServerName = empty( $_SERVER['SERVER_NAME'] ) ? '' : $_SERVER['SERVER_NAME'];

        Config::yourInit();

        $strAlienFramework = realpath( Config::$_strAbsPath . '/' . Config::$_strAlien );
        $strGeneratedDbClasses = ! empty( Config::$_strGeneratedDbClassesPath ) ? realpath( Config::$_strGeneratedDbClassesPath ) : '';
        set_include_path( $strAlienFramework . PATH_SEPARATOR  . $strGeneratedDbClasses . PATH_SEPARATOR . Config::$_strAbsPath );
        chdir( Config::$_strAbsPath );
    }

    static function yourInit() {
        // add your stuff here
    }
}

Config::init();
