<?php 

class Config {
    static $_strAbsPath; // WILL BE SET IN init()!!
    static $_fIsProduction; // WILL BE SET IN init()!!
    static $_strServerName; // WILL BE SET IN init()!!

    static $_strAlien = '../../alien-framework-code'; // where is the alienframework?
    static $_fDebug = true;
    static $_strDebugLog = '/var/log/alien/example01-log-02-database.log';

    //static $_fLogDirectOutput = true; // print all log into the output stream
    static $_fLogInfoSytemErrorDirectOutput = true; // print system errors into the output stream

    static $_DB_DB='alien';
    static $_DB_HOST='localhost';
    // static $_DB_PORT='14000'; optional
    static $_DB_USER='alien';
    static $_DB_PWD='alien';
    static $_DB_PREFIX = 'alien_';
    
    static $_DB_DEBUG_TABLE = 'debug_log2';


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
        if ( ! is_dir( '/var/log' ) ) { // are we on a local test system, then use different values.
            static $_DB_PREFIX = 'alien_';
            self::$_strDebugLog = '../../logs/example01-log-02-database.log';
        }
    }
}

Config::init();
