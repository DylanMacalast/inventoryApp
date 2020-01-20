<?php
// autoload classes
require __DIR__ .'/../../Config/Bootstrap.php';

use \App\Includes\Models\ItemsModel as ItemsModel;
use \App\Config\Database as Database;

class ItemsController
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
        var_dump($stmt);

        // check if more then 0 records are found
        if($num > 0) {
            // items array

        }
    }

}

$test = new ItemsController();
$test->processPageRequest();