<?php
use \App\Includes\Controllers\ItemsController;
use PHPUnit\Framework\TestCase;

class ItemsControllerTest extends TestCase
{

	public function testSetItemsArrayReturnsCorrectKey()
	{
		$cont = new ItemsController();
		$cont->setItemsArray();
		$this->assertArrayHasKey(0, $cont->setItemsArray());
	}




}
