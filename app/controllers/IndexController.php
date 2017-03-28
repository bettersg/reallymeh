<?php 

class IndexController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo Template::instance()->render('header.html');
	}

	function render($f3){
		$messages = new Messages($this->db);
		$msg = $messages->all()[0];
		$f3->set('msg',$msg);

		$f3->set('hello','hello world');

		echo Template::instance()->render('index.html');
	}
}