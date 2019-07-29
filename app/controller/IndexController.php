<?php
namespace Controller;
use Model\Challenge;
use View\Result;
class IndexController
{
	public $model;
    public $template;
 
    public function __construct() {
        $this->model = new Challenge();
        $this->template = new Result();
    }
 
    public function index() {
        $result = $this->model->execute();
        $this->template->render($result);
    }
}
