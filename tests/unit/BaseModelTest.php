<?php
// use \App\Includes\Config\Database;
use \App\Includes\Models\BaseModel;
use \App\Includes\Models\ItemsModel;
use PHPUnit\Framework\TestCase;
class BaseModelTest extends TestCase
{


	public function testFindSingleStub()
	{
		$stub = $this->createMock(ItemsModel::class);

		//Fake query
		$query = "SELECT id FROM items WHERE id = 2";

		// Configure stub
		$stub->method('findSingle')
			->with(2)
			->willReturn($query);

		// Testing the stub
		$this->assertSame("SELECT id FROM items WHERE id = 2", $stub->findSingle(2));
		/**
		 * @return fake query
		 */
		$query = $stub->findSingle(2);
		return $query;

	}



	/**
	 * @depends testFindSingleStub
	 */
	public function testFindSingleBaseReturnsCorrectData($query)
	{

		$model = new BaseModel();
		// Logic is based of getting row 2 from the pizza_inventory DB
		$this->assertSame(array('id' => '2'), $model->findSingleBase($query));
	}	

/**
 * @todo LOOK INTO TESTING FINDALL AGAIN AS I THINK THIS WILL BE DIFFERNET
 * Another way of testing the findSingleBase 
 * www.codeutopia.net/blog/ -> Go to the unitTesting 4 article.
 */
/**

 */





}













