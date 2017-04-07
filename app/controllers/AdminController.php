<?php 

class AdminController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('navheader.html');
	}

	function render($f3){	    
	    echo \Template::instance()->render('admin.html');
	}

	function edit($f3){	    
	    echo \Template::instance()->render('edit.html');
	}

	function insert($f3){	    
	    echo \Template::instance()->render('insert.html');
	}

	function save($f3){	    
	    echo \Template::instance()->render('admin.html');
	}

}