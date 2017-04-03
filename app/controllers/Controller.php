<?php 
class Controller {
	
	function afterroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('footer.html');
	}

	protected $f3;
	protected $db;

	function __construct() {
		
		$f3=Base::instance();
		$this->f3=$f3;

	    $db=new DB\SQL(
	        $f3->get('herokudb'),
	        $f3->get('herokudbusername'),
	        $f3->get('herokudbpassword'),
	        array( \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION )
	    );

	    $this->db=$db;
	}
}