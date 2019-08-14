<?php

namespace App\Includes\Models;
require __DIR__ .'/../Config/Bootstrap.php';
use \App\Includes\Config\Database;
use \App\Includes\Models\ItemsModel as ItemsModel;


//  the database class
class BaseModel
{

    // Select all
    public static function findAll($sql) {
        // initDatabase returns new PDO object, we then call the prepare method adn pass in the query
        $req = Database::initDatabase()->prepare($sql);
        // calling the execute method to run the query
        $req->execute();
        // Returning all the results from execute
        return($req->fetchAll());
    }

    // // Select single based on id
    public static function findSingleBase($sql) {
        $req = Database::initDatabase()->prepare($sql);
        $req->execute();
        return($req->fetch());
    }

}
