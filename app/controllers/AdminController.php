<?php 

class AdminController extends Controller {
	
	function beforeroute() {
		// render header
			echo \Template::instance()->render('adminheader.html');		
	}

	function render($f3){	    
		
 	$user=new DB\SQL\Mapper($this->db,'users');
		$auth== null;
		$auth = new \Auth($user, array('id'=>'username', 'pw'=>'password'));
		$login_result = $auth->basic();
		if ($login_result) 
			{
				$f3->set('SESSION.username','SERVER.PHP_AUTH_USER');
			}

	 	if (!$f3->get('SESSION.username')) 
	 	{ 
	 		$f3->error(401);
	 	}


		else {
			$quizzes = new Quizzes($this->db);
			$quiz = $quizzes->all();
			$topicCount = $quizzes->topicCount();
			$f3->set('quiz',$quiz);
			$f3->set('topicCount',$topicCount);

			echo \Template::instance()->render('admin.html'); 
		}

 
	}

	function editQuiz($f3, $params){	    
		 $quizid = $f3->get('PARAMS.id');
		 $quiz = new Quizzes ($this->db);
		 $quiz->getById($quizid);
		 $quiz->copyTo('quiz');
 

	      
	    echo \Template::instance()->render('editquiz.html');
	}

	function editSaveQuiz($f3, $params){	    
	    // save the user's results to the database	
		$quizid = $f3->get('PARAMS.id');
		$newquiz = new Quizzes ($this->db);
    	$newquiz->getById($quizid);

    	// set the web file receive method
    	$web = new \Web();
    	$overwrite=true;
    	$slug = true;

		$newquiz->copyfrom('POST', function($val) {
		    return array_intersect_key($val, array_flip(array('name','description')));
		});
    	$files = $web->receive(function($file,$formFieldName){
        	var_dump($file);
        	return true;
    		},
    		$overwrite,
    		$slug
		);
		$name = array_keys($files);
		$name = $name['0'];		
		$newquiz->image = $name;		
		$newquiz->save();		

		$f3->reroute('/admin');

	}

	function editQuestions($f3, $params){	    
		 $quizid = $f3->get('PARAMS.id');
  		
	      
	    echo \Template::instance()->render('editquiz.html');
	}


	function editSaveQuestions($f3, $params){	    
	    // save the user's results to the database	
		$quizid = $f3->get('PARAMS.id');


	
		$question = new Questions ($this->db);
		
		foreach($f3->get('POST.question') as $q) {		  	
		  	$question->getById($q['questionid']);
		  	$text = $q['text'];
		  	$byline = $q['byline'];
		  	$correctanswer = $q['correctanswer'];		  	
		  	$answerwriteup = $q['answerwriteup'];
		  	$optiontype = $q['optiontype'];		  	

		  	$question->quiz_id_fk = $newquiz->_id;
		  	$question->text = $text;
		  	$question->byline = $byline;
		  	$question->correctanswer = $correctanswer;
		  	$question->answerwriteup = $answerwriteup;
		  	
		  	$question->save();


		}
		$f3->reroute('/admin');

	}


	function editSaveChoices($f3, $params){	    
		$choice = new Choices ($this->db);

		  	$questionid = $question->id;

		  	if ($optiontype != 'CUSTOM') {
		  		$choice->getById($q['options[0].id']);
		  		$choice->question_id_fk = $questionid;
		  		$choice->optiontype = $optiontype;
		  		$choice->save();
		  	}
		  	if ($optiontype == 'CUSTOM') {
		  		foreach($q['custom'] as $c) {
		  			$choiceid = $c->id;
		  			$choice->getById($choiceid);
		  			$choice->question_id_fk = $questionid;
		  			$choice->optiontype = 'CUSTOM';
		  			$choice->text = $c; 
		  			$choice->save();
		  		}
		  	}
	}

	function insert($f3){	    
	    
	 	if ($f3->get('SESSION.username')) 
	 	{ 
	 		echo \Template::instance()->render('insert.html');
	 	}
	 	else {
	 		$f3->error(401);
	 	}

	 	
	}

	function save($f3){	    
	    // save the user's results to the database	
		$newquiz = new Quizzes ($this->db);
    	
    	// set the web file receive method
    	$web = new \Web();
    	$overwrite=true;
    	$slug = true;

		$newquiz->copyfrom('POST', function($val) {
		    return array_intersect_key($val, array_flip(array('name','description')));
		});
    	$files = $web->receive(function($file,$formFieldName){
        	var_dump($file);
        	return true;
    		},
    		$overwrite,
    		$slug
		);
		$name = array_keys($files);
		$name = $name['0'];		
		$newquiz->image = $name;		
		$newquiz->save();

		$question = new Questions ($this->db);
		$choice = new Choices ($this->db);
		foreach($f3->get('POST.question') as $q) {		  	
		  	$question->reset();
		  	$text = $q['text'];
		  	$byline = $q['byline'];
		  	$correctanswer = $q['correctanswer'];		  	
		  	$answerwriteup = $q['answerwriteup'];
		  	$optiontype = $q['optiontype'];		  	

		  	$question->quiz_id_fk = $newquiz->_id;
		  	$question->text = $text;
		  	$question->byline = $byline;
		  	$question->correctanswer = $correctanswer;
		  	$question->answerwriteup = $answerwriteup;
		  	
		  	$question->save();

		  	$questionid = $question->id;

		  	if ($optiontype != 'CUSTOM') {
		  		$choice->reset();
		  		$choice->question_id_fk = $questionid;
		  		$choice->optiontype = $optiontype;
		  		$choice->save();
		  	}
		  	if ($optiontype == 'CUSTOM') {
		  		foreach($q['custom'] as $c) {
		  			$choice->reset();
		  			$choice->question_id_fk = $questionid;
		  			$choice->optiontype = 'CUSTOM';
		  			$choice->text = $c; 
		  			$choice->save();
		  		}
		  	}

		}

		
 
		// var_dump($f3->get('POST'));

		$f3->reroute('/admin');


	}



}


