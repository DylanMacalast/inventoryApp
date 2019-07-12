<?php

use PHPUnit\Framework\TestCase;
class ModelTest extends TestCase
{

    public function testModelConnection()
    {
        $model = new \App\Includes\Models\Model;
        $model->setFirstname('Billy');
     
        $this->assertEquals($model->getFirstname(), 'Billy');
    }


}