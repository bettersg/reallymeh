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