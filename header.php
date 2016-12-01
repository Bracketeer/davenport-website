<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Brent Stradling">


	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

  <div class="blog-masthead">
  	<div class="container-fluid">
  		<nav class="blog-nav">
  			<a class="blog-nav-item active" href="/">Home</a>
  			<?php wp_list_pages( '&title_li=' ); ?>
  		</nav>
  	</div>
  </div>


  <div class="container-fluid container-header" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/working.jpg'); background-position: center; background-size: cover;">
		<div class="blog-header">
			<a href="<?php bloginfo( 'wpurl' );?>"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Davenport_logo.png" alt="" /></a>
		</div>
    </div>
		<div class="page-header">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
		</div>
    <div class="container-fluid">
