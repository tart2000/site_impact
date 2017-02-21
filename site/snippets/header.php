<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $site->language() ?>"> <!--<![endif]-->
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php echo css('assets/css/bootstrap.min.css') ?>
	<?php echo css('assets/css/main.css') ?>

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  	<link rel="icon" type="image/ico" href="<?php echo $site->url() ?>/assets/images/favicon.ico" />

  <?php echo js('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>

</head>
<body>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<!-- The overlay -->
	<div id="myNav" class="overlay">

	  <!-- Button to close the overlay navigation -->
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	  <!-- Overlay content -->
	  <div class="overlay-content">
	  	<?php foreach($pages->visible() as $p): ?>
	  		<a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
		<?php endforeach ?>
	  </div>

	</div>

	<!-- Use any element to open/show the overlay navigation menu -->
	<span onclick="openNav()" type="button" class="burger">
		&#9776;
	</span>

	<?php if ($page->template() != 'home') : ?>
		<a href="<?php echo $site->url() ?>" id="logo-s">
			<img src="<?php echo $site->url() ?>/assets/images/logo_impact8_tiny.png">
		</a>
	<?php endif ?>
	

	<div class="wrapper">
