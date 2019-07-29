<?php
use PHPUnit\Framework\TestCase;
use View\Result;

class ResultTest extends TestCase
{
	private $obj;

    protected function setUp() {
        $this->obj = new Result();
    }

    /**
    * @param $arr
    *
    * @dataProvider emptyProvider
    */
    public function testRenderEmpty($arr) {
        $this->assertEmpty($this->obj->render($arr));
    }

    public static function emptyProvider()
    {
        return array(array(array()));
    }

    /**
    * @param $arr
    *
    * @dataProvider arrayProvider
    */
    public function testRenderNotEmpty($arr) {
        $this->assertEmpty($this->obj->render($arr));
    }
    public static function arrayProvider()
    {
        return array(array(array(11,'Linio',13,14,'Linianos',16,17,'Linio',19,'IT')));
    }

    protected function tearDown() {
        $this->obj = null;
    }
}
