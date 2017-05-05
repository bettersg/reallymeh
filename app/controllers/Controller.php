<?php 
class Controller {
	
	protected $f3;
	protected $db;

	function __construct() {
		
		$f3=Base::instance();
		$this->f3=$f3;

	    $db=new DB\SQL(

	        $f3->get('herokudb'),
	        $f3->get('herokudbusername'),
	        $f3->get('herokudbpassword'),
/*

	        $f3->get('devdb'),
	        $f3->get('devdbusername'),
	        $f3->get('devdbpassword'),
*/
	        array( \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION )
	    );

	    $this->db=$db;
	}

	function error($f3){
		echo Template::instance()->render('404.html');
		exit;
		}
}