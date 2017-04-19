<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <meta property="og:url"  content="<?php echo $weburl; ?><?php echo $PATH; ?>" />       
        <meta property="og:title"              content="Confirm? <?php echo $quiz['name']; ?> " />
        <meta property="og:description"        content="Discover the truth about <?php echo $quiz['name']; ?> for Singapore, 10 hard questions at a time. Are you ready to Confirm?" />
        <meta property="og:image"              content="<?php echo $weburl; ?><?php echo $quiz['image']; ?>" />
        <meta property="og:type"              content="website" />
        <meta property="fb:app_id"              content="214948752321276" />

        <title>Confirm?</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="Confirm?" />
        <link rel="shortcut icon" href="<?php echo $BASE; ?>/ico/favicon.ico"> 
        <!-- Core CSS -->         
        <link href="<?php echo $BASE; ?>/app/views/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="<?php echo $BASE; ?>/app/views/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
        <!-- Style Library -->         
        <link href="<?php echo $BASE; ?>/app/views/css/style-library-1.css" rel="stylesheet">
        <link href="<?php echo $BASE; ?>/app/views/css/plugins.css" rel="stylesheet">
        <link href="<?php echo $BASE; ?>/app/views/css/blocks.css" rel="stylesheet">
        <link href="<?php echo $BASE; ?>/app/views/css/custom.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="app/views/js/html5shiv.js"></script>
      <script src="app/views/js/respond.min.js"></script>
    <![endif]-->         
    </head>     
    <body data-spy="scroll" data-target="nav">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=214948752321276";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        
    <nav class="navbar navbar-default" role="navigation"> 
        <div class="container-fluid"> 
            <div class="navbar-header"> 
                <a class="navbar-brand aqua" href="<?php echo $BASE; ?>/">CONFIRM?</a> 
            </div>                 
        </div>             
    </nav>