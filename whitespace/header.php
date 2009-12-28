<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />


<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/whitespace/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<style type="text/css" media="screen">
<!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); -->
</style>

<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  // Load jQuery
  google.load("jquery", "1");
  google.load("jqueryui", "1");
</script>
<script type="text/javascript" src="jquery.flip.js"></script>
</head>

<body>

<div id="wrap">

	<div id="header">
	
		<div id="headerleft">
               <img class="headerimg" src="http://radiotierra.org/wp-content/uploads/logo.png"/>
			<a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a><br />
               <img class="headerimgright" src="http://radiotierra.org/wp-content/uploads/pinguino.png"/>
			<?php bloginfo('description'); ?>
		</div>
		
		<div id="headerright">
			<ul>
				<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
				<?php wp_list_pages('title_li=&depth=1&exclude=2,324,341'); ?>
				<!-- <li><a id="rss" href="<?php bloginfo('rss_url'); ?>">Subscribe!</a></li> -->
			</ul>
		</div>

	</div>
	
<div style="clear:both;"></div>
	
	<div id="tagline">
		<div id="taglineleft">
                        <!-- <p><strong>Broadcasting:</strong> ¡24 horas de la día, 7 días de la semana!</p> -->
			<p><span style="font-size:1.3em;margin-right:10px;">On The Air:</span> <?php getNowPlaying(); ?> </p>
		</div>
		
		<div id="taglineright">
          <?php $the_query = new WP_Query('cat=11,3637&showposts=1');
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<p><span style="font-size:1.3em;margin-right:10px;">Latest Blog Update:</span><strong style="font-size:1.1em;font-variant:small-caps" ><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></strong></p>
               <?php endwhile; ?>
		</div>
	</div>