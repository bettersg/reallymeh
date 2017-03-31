<?php
class Questions extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db) {
	    parent::__construct($db,'questions');
	}
	
	public function all() {
	    $this->load();
	    return $this->query;
	}
	public function getById($id) {
	    $this->load(array('id=?',$id));
	    return $this->query;
	}	
	public function getByQuizId($id) {
	    $questions = $question_mapper->find(['quiz_id_fk=?',$id]);
	    foreach($questions as &$question) {
	    	$question['options'] = $options_mapper->find(['question_id_fk=?',$question['id']]);
	    }
	    return $questions;
//	    $this->load(array('quiz_id_fk=?',$id));
//	    return $this->query;
	}	

//	public function getOptions($id) {
//	    return (new Choices)->getByQuestionId($id);
//	}	

	public function add() {
	    $this->copyFrom('POST');
	    $this->save();
	}
	
	public function edit($id) {
	    $this->load(array('id=?',$id));
	    $this->copyFrom('POST');
	    $this->update();
	}
	
	public function delete($id) {
	    $this->load(array('id=?',$id));
	    $this->erase();
	}
}