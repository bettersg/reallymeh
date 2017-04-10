<?php 

class IndexController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('header.html');
	}

	function afterroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('footer.html');
	}

	function render($f3){
		$quizzes = new Quizzes($this->db);
		$quiz = $quizzes->all();
		$f3->set('quiz',$quiz);

		echo \Template::instance()->render('index.html');
	}
}