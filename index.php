<?php

// Kickstart the framework
$f3=require('lib/base.php');

// Load configuration
$f3->config('app/config.ini');
$f3->config('app/routes.ini');





$f3->run();
