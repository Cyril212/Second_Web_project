<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title><?php bloginfo('title')?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- WebGL -->
<script src="https://rawgit.com/mrdoob/three.js/master/build/three.js"></script>
<script src="https://rawgit.com/mrdoob/three.js/master/examples/js/Detector.js"></script>
<script src="https://rawgit.com/mrdoob/three.js/master/examples/js/controls/OrbitControls.js"></script>
<script src="https://rawgit.com/mrdoob/three.js/master/examples/js/loaders/OBJLoader.js"></script>
<script src="https://rawgit.com/mrdoob/three.js/master/examples/js/loaders/MTLLoader.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<?php wp_head()?>
</head>
<header>
<div class="col-md-14 backgr">
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
       <a class="navbar-brand" href="<?php home_url('/')?>"><?php bloginfo('name')?></a>       
  </div>
</nav>


<?php  do_action('my_hook','<img src="http://psychoticwoofer.site11.com/wp-content/uploads/2016/07/wallpaper-2970828.jpg" class="align-center img-responsive"/>'); ?>
<div class = "post-content">
            <h3 class="text-center">Robots!</h3>
            <p class="text-center">Lorem ipsum dolor sit amet</p>   
</div>
                              
            </div>
</header>
