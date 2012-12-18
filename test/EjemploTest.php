<?php

require_once (__DIR__.'/../home.php');

class EjemploTest extends PHPUnit_Framework_TestCase 
{ 
    public function testReturnGreeting() 
    {
        $a = 10;
	$b = 5;

	$result = sumaEnteros ( $a , $b );
	$this->assertEquals( $result , 15 );
    }

    public function testOtherExample()
    {
	$a = 100;
	$b = -5;

	$result = sumaEnteros ( $a , $b );
	$this->assertEquals( $result , 95 );
    }
}


?>
