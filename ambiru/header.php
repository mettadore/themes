<?php load_theme_textdomain('ambiru');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php if(is_home()){echo 'id="home"';}?>>
<div id="wrap" class="clearfix">
<div id="header">
	<h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<p id="desc"><?php bloginfo('description'); ?></p>

</div>
<div id="nav" class="clearfix">
	<ul>
		<li><a href="<?php echo get_settings('home'); ?>/"><?php _e('Home','ambiru'); ?></a></li>
		<?php //wp_list_pages('depth=1&title_li='); ?> 
	</ul>
	

</div>	<?php if (function_exists('wp_ozh_wsa')) { wp_ozh_wsa("46860nocolor"); } ?>
