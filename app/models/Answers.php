<?php
class Answers extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db) {
	    parent::__construct($db,'answers');
	}
	
	public function all() {
	    $this->load();
	    return $this->query;
	}
	public function getById($id) {
	    $this->load(array('id=?',$id));
	    return $this->query;
	}
// need functions to collate and average the data by demographic group
	public function averageAnswer($quiz_id,$question_id) {		
//		$this->select('COUNT(*), question1',null,array('where'=>'quiz_id_fk=4','group by'=>'question1'));
//	    $answers = $this->query;
// 		return $this->query;		
	    return $this->db->exec('select question'.$question_id.', COUNT(*) as votes  from  f8m7o85ldalpqf2m.answers where quiz_id_fk='.$quiz_id.' group by question'.$question_id.' order by votes desc');
	    
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