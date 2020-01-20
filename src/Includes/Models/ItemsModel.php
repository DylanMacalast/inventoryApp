<?php

namespace App\Includes\Models;
require __DIR__ .'/../Config/Bootstrap.php';


/**
 * This class will act as the model for the system
 */

//  the database class
class BaseModel
{
    // Properties
    private $conn;
    private $table_name = "items";

    //constructor to instanciate the database object
    // when we instanciate this class we need to pass in the database object
    public function __construct($db)
    {
        $this->conn = $db;
    }
    /**
     * Method to Read all data from database table
     * This will be generic for front end and mangagement
     */
    public function read()
    {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY ASC";

        //prepare query
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }
    



    /**
     * Method to Update a row in a table
     */



    /**
     * Method to Insert row into table
     */


    /**
    * Method to Delete Row from table
    */


}
