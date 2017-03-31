<?php
class Choices extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db) {
	    parent::__construct($db,'choices');
	}
	
	public function all() {
	    $this->load();
	    return $this->query;
	}
	public function getById($id) {
	    $this->load(array('id=?',$id));
	    return $this->query;
	}
	public function getByQuestionId($id) {
	    $this->load(array('question_id_fk=?',$id));
	    return $this->query;
	}

	
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