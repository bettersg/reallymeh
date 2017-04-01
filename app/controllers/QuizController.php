<?php 

class QuizController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('header.html');
	}

	function render($f3,$params){
	    $quizzes = new Quizzes($this->db);
	    $quiz = $quizzes->getById($params['id'])[0];
	    $f3->set('quiz',$quiz->cast());

	    $thisquiz = new Questions($this->db);	    

	    $questions = [];
	    foreach ($thisquiz->getByQuizId($params['id']) as $question) {
	      $options = [];

	      foreach ($question->getChoices() as $option)
	        $options[] = $option->cast();
	      $questions[] = $question->cast()+['options' => $options];
	    }
	    $f3->set('questions',$questions);

	    echo \Template::instance()->render('quiz.html');
	}



}