<?php 

class AnswerController extends Controller {

	function beforeroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('navheader.html');
	}
	
	function afterroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('footer.html');
	}	
	
	function answer($f3,$params){
	
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
				$question_results[] = $answers->averageAnswer($id,$i);
				// $question_results[] = $thisresult->cast();
			}
		$f3->set('question_results',$question_results);
		

		echo \Template::instance()->render('answer.html');
		
	}

	function notallowed() {
		echo 'You must complete the quiz to see the answers page';
	}

}