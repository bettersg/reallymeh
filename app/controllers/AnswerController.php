<?php 

class AnswerController extends Controller {

	function beforeroute($f3,$params) {
		// set the cookie once the user has completed the quiz
		$f3->set('COOKIE.confirm_visited_quiz', $params['id'][0] , 60 * 60 * 24 * 30);
		// render header
	    $quizzes = new Quizzes($this->db);
	    $quiz = $quizzes->getById($params['id'])[0];
	    if (!$quiz) {$f3->error(404);}
	    $f3->set('quiz',$quiz->cast());
		echo \Template::instance()->render('navheader.html');
		
	}
	
	function afterroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('footer.html');
	}	
	
	function answer($f3,$params){
	
	//	if ($f3->exists('COOKIE.confirm_visited_quiz')) {
	// 		$f3->set('visited','visited already');
	// 		consider whether to only save the data if the cookie has not been set yet. Otherwise skip?
	//		}

		// save the user's results to the database	
		$quizresults = new Answers($this->db);		
		$quizresults->add();


		$id = $this->f3->get('POST.quiz_id_fk');

		// set the user's answers to variable quizresults
		$f3->set('quizresults',$quizresults);
		
		// set the quiz name and description from database
		$quizzes = new Quizzes($this->db);
	    $quiz = $quizzes->getById($params['id'])[0];
	    $quiz->numparticipants++;   // add another participant to the count
	    $quiz->save();
	    $f3->set('quiz',$quiz->cast());		

		// set the correct answers to variable thisquiz from the Questions database
		// $questions = new Questions($this->db);
	    // $thisquiz = $questions->getById($params['id']);
	    $thisquiz = new Questions($this->db);	    
	    $questions = [];
	    	foreach ($thisquiz->getByQuizId($params['id']) as $question) {	      
	      		$questions[] = $question->cast();
	    	}
	    $f3->set('questions',$questions);

	    // get the other users' most popular answers
		$answers = new Answers($this->db);
		 $question_results= [];
			for ($i=1 ;$i<11;$i++) {
				$question_results[] = $answers->answerVotes($id,$i);
				// $question_results[] = $thisresult->cast();
			}
		$f3->set('question_results',$question_results);
		

		echo \Template::instance()->render('answer.html');
		
	}

	function notallowed($f3, $params) {
		$f3->set('id',$params['id']);		
		echo \Template::instance()->render('notallowed.html');	
	}

}