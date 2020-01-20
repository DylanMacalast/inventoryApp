<?php
namespace App\management\Controllers;
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
    
    // the current item
    public $entity = array();

   
    public function processPageRequest()
    {
        // set database
        $this->database = new Database();
        $this->db = $this->database->getConnection();
        //instanciate the model
        $this->model = new ItemsModel($this->db);

        // read
        $this->getItemsData($this->model);


        // load the entity to populate inputs
        if(isset($_GET['update']))
        {
            $id = $_GET['update'];
            $this->loadEntity($this->model, $id);
        } 

        // create
        if(isset($_POST['submit'])){
            $this->createItem($this->model);
        }

        //update
        if(isset($_POST['update'])){
            $this->updateItem($this->model, $_GET['update']);

        } 

        // delete
        if(isset($_GET['delete']))
        {
            $id = $_GET['delete'];
            $this->deleteItem($this->model, $id);
        }
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


    /**
     * Public function to create inventory items
     */
    public function createItem($model)
    {
        // if submited
        if(!empty($_POST)){
            // get input data
            
            $name = $_POST['name'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];

            // clean it up
            $name =  htmlspecialchars(strip_tags($name));
            $price = htmlspecialchars(strip_tags($price));
            $amount = htmlspecialchars(strip_tags($amount));

            // set data
            $data = array(
                'name' => $name,
                'price' => $price,
                'amount' => $amount
            );

            //insert data
            if($model->create($data))
            {
                echo "saved";
                header("Location: ../management/index.php");
            } else {
                echo "didnt save";
            }

        }

    }



    public function updateItem($model, $id)
    {

        if(!empty($_POST)){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];


            // clean it up
            $name =  htmlspecialchars(strip_tags($name));
            $price = htmlspecialchars(strip_tags($price));
            $amount = htmlspecialchars(strip_tags($amount));

            // set data
            $data = array(
                'name' => $name,
                'price' => $price,
                'amount' => $amount,
                'id' => $id
            );

            //insert data
            if($model->update($data))
            {
                echo "saved";
                header("Location: ../management/index.php");
            } else {
                echo "didnt save";
            }
        }


    }


    public function loadEntity($model, $id)
    {
        $data = $model->readOne($id);
        $row = $data->fetch(\PDO::FETCH_ASSOC);

        $this->entity['name'] = $row['name'];
        $this->entity['price'] = $row['price'];
        $this->entity['amount'] = $row['amount'];
    }





    public function deleteItem($model, $id)
    {
        if($model->delete($id))
        {
            header("Location: ../management/index.php");
        } else {
            echo "error";
        }

    }

}

