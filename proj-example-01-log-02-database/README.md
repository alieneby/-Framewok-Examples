# Log data stored in MySQL / MariaDB

Your log data could be stored in a database. 

    Log::always( 'This will always be logged' );
    Log::info( 'This will be logged, if Config::debug is true' );
    Log::error( 'This will be logged always as error' );
    Log::systemError( 'bad bad error'  );

When you programm stops, then the data will be stored into a database table.

Therefor you need to set these values in Config.php: 
```php
class Config {
    :
    static $_DB_DB='alien';
    static $_DB_HOST='localhost';
    static $_DB_PORT='14000'; // optional
    static $_DB_USER='alien';
    static $_DB_PWD='alien';
    static $_DB_PREFIX = 'alien_';    
    static $_DB_DEBUG_TABLE = 'debug_log';
    :
}
```


# Installation

Required: MariaDB or MySQL

Create a database: alien

Create a database user: alien

Set password to: alien

