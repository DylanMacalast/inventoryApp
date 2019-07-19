<?php
// Connecting to the database
// We want a way for this class to be instanciated within each model
namespace App\Includes\config;
class Database
{
    private static $databaseHandler = null;

    private function __contstruct() {

    }

    public static function initDatabase()  {
        if(is_null(self::$databaseHandler)){
            try{
                self::$databaseHandler = new \PDO("mysql:host=localhost;dbname=pizza_inventory", 'root', 'root');
                self::$databaseHandler->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            } catch(\PDOException $e){
                throw new \PDOException ($e->getMessage());
            }

        }
        return self::$databaseHandler;
    }
}



