<?php 

class AdminController extends Controller {
	
	function beforeroute() {
		// render header
			echo \Template::instance()->render('adminheader.html');		
	}

	function login($f3) {
		// session management if required
		$auth->reset();
		// $user = new Users($this->db);
		$user=new DB\SQL\Mapper($this->db,'users');
		$auth = new \Auth($user, array('id'=>'username', 'pw'=>'password'));
		$auth->basic();
		$f3->set('SESSION.username','SERVER.PHP_AUTH_USER');	  	
	}

	function render($f3){	    
		
/*		$user=new DB\SQL\Mapper($this->db,'users');
		$auth== null;
		$auth = new \Auth($user, array('id'=>'username', 'pw'=>'password'));
		$auth->basic();
		$f3->set('SESSION.username','SERVER.PHP_AUTH_USER');	
		if (!$f3->get('SESSION.username')) $f3->error(401);
*/
		if (1==0) {}

		else {
			$quizzes = new Quizzes($this->db);
			$quiz = $quizzes->all();
			$topicCount = $quizzes->topicCount();
			$f3->set('quiz',$quiz);
			$f3->set('topicCount',$topicCount);

			echo \Template::instance()->render('admin.html'); 
		}

//	    if ($f3->get('SESSION.username')=='gaurav') 
//	    	echo \Template::instance()->render('admin.html'); 
//	    	else $this->login($f3);
	}

	function edit($f3){	    
	    echo \Template::instance()->render('edit.html');
	}

	function insert($f3){	    
	    echo \Template::instance()->render('insert.html');
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
		foreach($f3->get('POST.question') as $q) {		  	
		  	$question->reset();
		  	$text = $q['text'];
		  	$byline = $q['byline'];
		  	$correctanswer = $q['correctanswer'];		  	
		  	$answerwriteup = $q['answerwriteup'];

		  	$question->quiz_id_fk = $newquiz->_id;
		  	$question->text = $text;
		  	$question->byline = $byline;
		  	$question->correctanswer = $correctanswer;
		  	$question->answerwriteup = $answerwriteup;
		  	$question->save();
		}
/*		for ($i=1; $i<11; $i++) {
			$question->reset();
			$question->quiz_id_fk = $newquiz->_id;


			$question->copyfrom('POST', function($val) {
		    	return array_intersect_key($val, array('text'=>'question'.$i.'_text','byline'=>'question'.$i.'_byline','optiontype'=>'question'.$i.'_optiontype'));
			});
		    $question->save();
		}
*/
		
		$f3->reroute('/admin');


	}



}


