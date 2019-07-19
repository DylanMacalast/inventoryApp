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
                WHERE 
                    State = "ACTIVE"
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
                AND
                    State = 'ACTIVE'
                ";
        return parent::findSingleBase($sql);
    }
   
}

