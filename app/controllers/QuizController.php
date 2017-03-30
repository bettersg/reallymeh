<?php 

class QuizController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('header.html');
	}

	function render($f3){
		$quizzes = new Quizzes($this->db);
		$quiz = $quizzes->getById(1)[0];
		$f3->set('quiz',$quiz);

		$thisquiz = new Questions($this->db);
		$questions = $thisquiz->getByQuizId(1);
		$f3->set('questions',$questions);
		
		echo \Template::instance()->render('quiz1.html');
	}
}