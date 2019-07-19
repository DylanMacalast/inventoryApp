<?php
namespace App\Includes\Controllers;
require __DIR__ .'/../Config/Bootstrap.php';
use \App\Includes\Models\ItemsModel;


class ItemsController 
{
    public $itemsArr = [];
    


    private function setItems()
    {
        $model = new ItemsModel();
        $data = $model->find();
        $count = sizeof($data);

        for ($i = 0; $i < $count; $i++){
                
            $newItem = $data[$i];
            array_push($this->itemsArr, $newItem);
        }
    }

    /**
     * @return array contiaing each items values as an array
     */
    public function getItems()
    {
        $this->setItems();
        return $this->itemsArr;
    }

  
}









