<?php 

class AdminController extends Controller {
	
	function beforeroute() {
		// session management if required
		// render header
		echo \Template::instance()->render('header.html');
	}

	function render($f3){	    
	    echo \Template::instance()->render('admin.html');
	}



}