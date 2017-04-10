<?php
class Users extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db) {
	    parent::__construct($db,'users');
//	    $choices_mapper=new \DB\SQL\Mapper($db,'choices');
	}
	
	public function all() {
	    $this->load();
	    return $this->query;
	}
	public function getById($id) {
	    $this->load(array('id=?',$id));
	    return $this->query;
	}
	
}