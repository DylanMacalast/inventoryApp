<?php
namespace App\Includes\Controllers;
// autoload classes
require __DIR__ .'/../../Config/Bootstrap.php';

use \App\Includes\Models\ItemsModel as ItemsModel;
use \App\Config\Database as Database;

class TillController 
{
    //db
    private $database;
    private $db; 
    //model
    private $model;
    public $itemsArray = array();
    
   
    public function processPageRequest()
    {
        // set database
        $this->database = new Database();
        $this->db = $this->database->getConnection();
        //instanciate the model
        $this->model = new ItemsModel($this->db);

        // read
        $this->getItemsData($this->model);

       }

    /**
     * public function to get the data and save it in an array 
     * 
     */
    public function getItemsData($model)
    {
        $stmt = $model->read();
        $num = $stmt->rowCount();

        // check if more then 0 records are found
        if($num > 0) {
            // items array
            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                // extract row makes $row['name'] = $name;
                extract($row);
                $items_item = array(
                    "id" => $id,
                    "name" => $name,
                    "price" => $price,
                    "amount" => $amount
                );

                array_push($this->itemsArray, $items_item);
            }

        }

    }



}

