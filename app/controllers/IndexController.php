<?php 

class IndexController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo View::instance()->render('header.html');
	}

	function render($f3){
		$messages = new Messages($this->db);
		$msg = $messages->all()[0];
		$f3->set('msg',$msg);
		
		echo View::instance()->render('index.html');
	}
}