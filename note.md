### Setting up phpunit
* Create project directroy
* Run composer require --dev phpunit/phpunit ^8.2
* This creates the composer files and the vendor folder
* You should be able to run ./vendor/bin/phpunit without no erros
* Next you want to create the tests folder(./tests/unit) and the app/src(./app/) folder
* You then want to go into composer.json file and add in the autoload part after the require part
{

    "autoload": {
        "classmap": [
            "src/"
        ]
    },
    "require-dev": {
        "phpunit/phpunit": "^8.2"
    }
}
* Then run the command composer dump-autoload -o
* REMEBER TO RUN ./vendor/bin/phpunit everytime you change something to test it
* create a phpunit.xml file:
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php"
        colors="true"
        verbose="true"
        stopOnFailure="false">
        <testsuites>
            <testsuite name="Test suite">
                <directory>tests</directory>
            </testsuite>
        </testsuites>
</phpunit>

* Run a SampleTest.php file to check that everything is working properly:
```
<?php
use PHPUnit\Framework\TestCase;
class SampleTest extends TestCase{
    // Testing the push and pop functions within php
    public function testPushPop()
    {
        $arr = [];
        // Testing $arr is empty
        $this->assertSame(0, count($arr));

        // Adding one to array
        array_push($arr, 'foo');
        // Testing array_push works using count
        $this->assertSame('foo', $arr[count($arr) -1]);
        $this->assertSame(1, count($arr));

        // Testing array_pop works using count and assertSame
        $this->assertSame('foo', array_pop($arr));
        $this->assertSame(0, count($arr));
    }
}
```
* To run a test in the terminal just run the command ./vendor/bin/phpunit
* You will then get the testresults back!
* In test driven development you would write the test first

************* 
SETTING UP WITH Src
- within the test class method whic is where the test is:
- create a new object of the class you want to test
EG $sample = new \App\Models\SampleModel;
- Within the app/src folder you would then create the class you are trying to test
- At the top of the php openeing tags add the namespace for where the tests are
EG namespace App\Models;