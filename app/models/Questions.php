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
	    $this->load(array('quiz_id_fk=?',$id));
	    return $this->query;
	}	

/*	public function getChoices($id) {
	    $questions_mapper=new Questions($this->db);		
	    $choices_mapper=new Choices($this->db);

	    $questions = $questions_mapper->find(['quiz_id_fk=?',$id]);
	    foreach($questions as &$question) {
	    	$question['options'] = $choices_mapper->find(['question_id_fk=?',$question['id']]);
	    }
	    return $questions;
	}	
*/

	public function getChoices() {		
		$options=new Choices($this->db);
    	return $options->find(['question_id_fk=?',$this->id]);
	    // return (new Choices)->find(['question_id_fk=?',$this->id]);    
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