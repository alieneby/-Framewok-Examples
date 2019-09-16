<?php 

class Config {
    static $_strAlien = '../aliencode'; // where is the alienframework?
    static $_fDebug = true;
    static $_strDebugLog = '/var/log/alien/example01-log-01-file.log';
    static $_strAbsPath; // WILL BE SET IN init()!!    

    static function init() {
        self::$_strAbsPath = dirname( __FILE__ );    

        if ( ! is_dir( '/var/log/alien' ) ) { // are we on a local test system, then use different values.
            self::$_strDebugLog = '../../logs/xample01-log-01-file.log';
        }
    }
}

Config::init();