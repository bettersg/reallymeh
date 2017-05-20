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

	public function getByQuizId($quiz_id) {
	    $this->load(array('quiz_id_fk=?',$quiz_id));
	    return $this->query;
	}

// need functions to collate and average the data by demographic group
	public function answerVotes($quiz_id,$question_id) {		
		$this->votes = 'COUNT(*)';
		return $this->find(['quiz_id_fk = ?', $quiz_id], ['group' => 'question'.$question_id, 'order' => 'question'.$question_id.' asc']);
//	    return $this->db->exec('select question'.$question_id.', COUNT(*) as votes  from  f8m7o85ldalpqf2m.answers where quiz_id_fk='.$quiz_id.' group by question'.$question_id.' order by votes desc');
//	    return $this->db->exec('select question'.$question_id.', COUNT(*) as votes  from  answers where quiz_id_fk='.$quiz_id.' group by question'.$question_id.' order by votes desc');
	    
	}

	public function answerDistribution($quiz_id) {		
		// $this->distribution = 'COUNT(*)';
		// return $this->select('score, count(*) as distribution','quiz_id_fk = '. $quiz_id,['group' => 'score', 'order' => 'score asc'] );
		 return $this->db->exec('select score, count(*) as distribution from f8m7o85ldalpqf2m.answers where quiz_id_fk='.$quiz_id.' group by score order by score asc');
	//	return $this->db->exec('select score, count(*) as distribution from answers where quiz_id_fk='.$quiz_id.' group by score order by score asc');
	}

	public function answerDemographic($question,$quiz_id,$race,$religion,$age,$housing,$location){
		// SELECT question1, count(question1) as occurence FROM f8m7o85ldalpqf2m.answers where quiz_id_fk='30' and race='indian' and religion='hinduism' and age='30' and housing='private' group by question1 order by occurence desc
		return $this->db->exec('SELECT question'.$question.', count(question'.$question.') as occurence FROM f8m7o85ldalpqf2m.answers where quiz_id_fk='.$quiz_id.' and race='.$race.' and religion='.$religion.' and age='.$age.' and housing='.$housing.' group by question'.$question.' order by occurence desc limit 1');

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