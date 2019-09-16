<?php 

class Config {
    static $_fDebug = true;
    static $_strAbsPath; // WILL BE SET IN init()!!
    
    static $_strAlien = '../aliencode';
    
    static $_DB_DB='blws';
    static $_DB_HOST='localhost';
    // static $_DB_PORT='14000'; optional
    static $_DB_USER='blws';
    static $_DB_PWD='blws';
    static $_DB_PREFIX = 'blws_';

    static function init() {
        self::$_strAbsPath = dirname( __FILE__ );
        if ( ! is_dir( '/var/log/alien' ) ) { // are we on a local test system, then use different values.
            static $_DB_DB='blws';
            static $_DB_HOST='localhost';
            // static $_DB_PORT='14000'; optional
            static $_DB_USER='blws';
            static $_DB_PWD='blws';
            static $_DB_PREFIX = 'blws_';
        }        
    }
}
Config::init();