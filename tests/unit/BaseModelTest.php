<?php
use \App\Includes\Config\Database;
use \App\Includes\Models\BaseModel;
use \App\Includes\Models\ItemsModel;
use PHPUnit\Framework\TestCase;
class BaseModelTest extends TestCase
{

	// public function databaseStub()
	// {
	// 	$stub = $this->createMock(Database::class);

	// 	// Configure stub
	// 	$stub->method('initDatabase')
	// 		->willReturn(self::$databaseHandler);
		
	// }

	public function testFindSingleStub()
	{
		$stub = $this->createMock(ItemsModel::class);

		// Configure stub
		$stub->myvar = 2;
		$stub->method('findSingle')
			->willReturn("SELECT Name FROM items WHERE id = $stub->myvar");

		// Testing the stub
		$this->assertSame("SELECT Name FROM items WHERE id = 2", $stub->findSingle($stub->myvar));
		/**
		 * @return fake query
		 */
		$query = $stub->findSingle($stub->myvar);
		return $query;

	}

	/**
	 * @depends testFindSingleStub
	 */
	public function testFindSingleBaseReturnsCorrectData($query)
	{
		$model = new BaseModel();
		// Logic is based of getting row 2 from the pizza_inventory DB
		$this->assertSame(array('Name' => 'Cheese'), $model->findSingleBase($query));
	}	


/**
 * @todo LOOK INTO TESTING FINDALL AGAIN AS I THINK THIS WILL BE DIFFERNET
 */


	


	

}