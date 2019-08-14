<?php

namespace App\Includes\Controllers;

require __DIR__ . '/../Config/Bootstrap.php';

use \App\Includes\Models\ItemsModel;

// Look into using dependency injection here to use the ItemsModel
// You dont fully understand it yet however it might be perfect for this issue

class ItemsController
{
    public $itemsArr;

    /**
     * @return itemsArr
     * sets the array from the ItemsModels find method to a property
     * and return it
     */
    public function setItemsArray()
    {
        $model = new ItemsModel();
       return $this->itemsArr = $model->find();

    }

}