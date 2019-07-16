<?php

namespace App\Includes\Models;
require __DIR__ .'/../Config/Bootstrap.php';
use \App\Includes\Config\Database;


//  the database class
class BaseModel
{
    // Select all
    public function findAll($sql) {
        $req = Database::initDatabase()->prepare($sql);
        $req->execute();
        return($req->fetchAll());
    }

    // Select single based on id
    public function findSingleBase($sql) {
        $req = Database::initDatabase()->prepare($sql);
        $req->execute();
        return($req->fetch());
    }

}