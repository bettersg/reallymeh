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
	public function answerVotes($quiz_id,$question_id) {		
		$this->votes = 'COUNT(*)';
		return $this->find(['quiz_id_fk = ?', $quiz_id], ['group' => 'question'.$question_id, 'order' => 'votes desc']);
//	    return $this->db->exec('select question'.$question_id.', COUNT(*) as votes  from  f8m7o85ldalpqf2m.answers where quiz_id_fk='.$quiz_id.' group by question'.$question_id.' order by votes desc');
//	    return $this->db->exec('select question'.$question_id.', COUNT(*) as votes  from  answers where quiz_id_fk='.$quiz_id.' group by question'.$question_id.' order by votes desc');
	    
	}

	public function answerDistribution($quiz_id) {		
		$this->distribution = 'COUNT(*)';
		return $this->db->exec('select score, count(*) as distribution from f8m7o85ldalpqf2m.answers where quiz_id_fk='.$quiz_id.' group by score order by score asc');
		// return $this->find(['quiz_id_fk = ?', $quiz_id], ['group' => 'score', 'order' => 'score asc']);
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