<?php
namespace App\Includes\Models;
require __DIR__ .'/../../Config/Bootstrap.php';

/**
 * This class will act as the model for the system
 */
//  the database class
class ItemsModel 
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
        $query = "SELECT * FROM " . $this->table_name;

        //prepare query
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;

    }

    

     /**
     * Method to Insert row into table
     */
    public function create($data)
    {
        $query = "INSERT INTO "
                     . $this->table_name . "
                  SET 
                    name=:name, price=:price, amount=:amount
        ";
        //prepare
        $stmt = $this->conn->prepare($query);
        //bind params
        $stmt->bindParam(':name', $data['name'], \PDO::PARAM_STR, 12);
        $stmt->bindParam(':price', $data['price'], \PDO::PARAM_INT);
        $stmt->bindParam(':amount', $data['amount'], \PDO::PARAM_INT);

        if($stmt->execute())
        {
            return true;
        } else {
            return false;
        }
        
    }




    /**
     * method to read one row from database tabl
     *
     * @param int $id
     */
    public function readOne($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id =" . $id;

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }


    /**
     * Method to Update a row in a table
     * @param int $id
     * @return bool
     */
    public function update($data)
    {
        $query = "UPDATE "
                     . $this->table_name . "
                  SET 
                    name=:name, price=:price, amount=:amount
                  WHERE id=:id
        ";
        //prepare
        $stmt = $this->conn->prepare($query);
        //bind params
        $stmt->bindParam(':name', $data['name'], \PDO::PARAM_STR, 12);
        $stmt->bindParam(':price', $data['price'], \PDO::PARAM_INT);
        $stmt->bindParam(':amount', $data['amount'], \PDO::PARAM_INT);
        $stmt->bindParam(':id', $data['id'], \PDO::PARAM_INT);

        var_dump($stmt);

        if($stmt->execute())
        {
            return true;
        } else {
            return false;
        }
 
    }



   


    /**
    * Method to Delete Row from table
    * @param int $id
    */

    public function delete($id)
    {
        $query = "DELETE FROM " 
                    . $this->table_name . 
                "
                WHERE id=:id
                ";
                
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        if($stmt->execute())
        {
            return true;
        } else {
            return false;
        }
    }


}
