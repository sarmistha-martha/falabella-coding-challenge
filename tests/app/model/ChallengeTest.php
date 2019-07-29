<?php
use PHPUnit\Framework\TestCase;
use Model\Challenge;

class ChallengeTest extends TestCase
{
	private $obj;

    protected function setUp()
    {
        $this->obj = new Challenge();;
    }

    /**
    * @param $num1
    * @param $num2
    *
    * @dataProvider numZeroProvider
    */
    public function testGetRemainderZero($num1, $num2)
    {
        $this->assertEquals(0,$this->obj->getRemainder($num1, $num2));
    }

    public static function numZeroProvider()
    {
        return array(
            array(3, 3),
            array(10, 5),
            array(30, 15)
        );
    }

    /**
    * @param $num1
    * @param $num2
    *
    * @dataProvider numNotZeroProvider
    */
    public function testGetRemainderNotZero($num1, $num2)
    {
        $this->assertNotEquals(0,$this->obj->getRemainder($num1, $num2));
    }

    public static function numNotZeroProvider()
    {
        return array(
            array(4, 3),
            array(11, 5),
            array(31, 15)
        );
    }

    public function testExecuteIT()
    {
        $this->assertContains('IT',$this->obj->execute());
    }

    public function testExecuteLinio()
    {
        $this->assertContains('Linio',$this->obj->execute());
    }

    public function testExecuteLinianos()
    {
        $this->assertContains('Linianos',$this->obj->execute());
    }

    public function testWriteOutput()
    {
        $this->assertNotEmpty($this->obj->execute());
    }

    protected function tearDown()
    {
        $this->obj = null;
    }
}
