<?php

use \App\Includes\Models\BaseModel;
use PHPUnit\Framework\TestCase;
class ItemsModelTest extends TestCase
{
// Create a stub
public function testStub()
{
    // Create a stub for the BaseModel class
    $stub = $this->createMock(BaseModel::class);

    // Configure the stub
    $stub->method('findAll')
        ->willReturn('query output');

    // Calling stub->findAll will now return 'query output'
    $this->assertSame('query output', $stub->findAll('query output'));

    // LOOK AT TESTING THESE METHODS AS THERE MIGHT BE AN EASIER WAY OF DOING IT
    
}
 


}