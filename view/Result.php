<?php
namespace View;

class Result
{
	public function render($result) {
		echo implode($result,"<br />");
	}
}
