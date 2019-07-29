<?php
use PHPUnit\Framework\TestCase;
use Controller\IndexController;

class IndexControllerTest extends TestCase
{
	private $obj;

    protected function setUp() {
        $this->obj = new IndexController();;
    }

    public function test__construct() {
        $this->assertempty($this->obj->__construct());
    }

    public function testIndex() {
        $this->assertempty($this->obj->index());
    }

    protected function tearDown() {
        $this->obj = null;
    }
}
