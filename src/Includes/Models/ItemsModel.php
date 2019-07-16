<?php
namespace App\Includes\Models;
require __DIR__ .'/../Config/Bootstrap.php';
use \App\Includes\Models\BaseModel as BaseModel;



class ItemsModel extends BaseModel
{
    public function find(){
        $sql = '
                SELECT
                    * 
                FROM 
                    Items
                ';
        return parent::findAll($sql);
    }

    public function findSingle($id)
    {
        $sql = "
                SELECT
                    *
                FROM
                    Items
                WHERE
                    id = $id
                ";
        return parent::findSingleBase($sql);
    }
   
}

$test = new ItemsModel();
print_r($test->find());
