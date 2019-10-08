<?php 

class Config {
    static $_strAbsPath; // WILL BE SET IN init()!!
    static $_fIsProduction; // WILL BE SET IN init()!!
    static $_strServerName; // WILL BE SET IN init()!!

    static $_strAlien = '../../alien-framework-code'; // where is the alienframework?
    static $_fDebug = true;
    static $_strDebugLog = '/var/log/alien/example01-log-01-file.log';

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
            self::$_strDebugLog = '../../logs/xample01-log-01-file.log';
        }
    }

}

Config::init();
