<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!-- <style src="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
		/* @import url( <?php bloginfo('stylesheet_url'); ?> ); */
	</style> -->

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="shortcut icon" href="http://www.basingstokeanimesociety.com/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="http://www.basingstokeanimesociety.com/favicon.ico" type="image/x-icon" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>

<div style="position: absolute; z-index: 2; top: 0px; left: 0px;"><img src='/news/wp-content/themes/bastheme2/bas2bg_left.png' /></div>
<div style="position: absolute; z-index: 3; top: 0px; left: 0px;"><img src='/news/wp-content/themes/bastheme2/bas2bg_topleft.png' /></div>
<div style="position: absolute; z-index: 1; top: 0px; left: 0px; width: 95%; background: url(/news/wp-content/themes/bastheme2/bas2bg_top.png) repeat-x;"><img src='/news/wp-content/themes/bastheme2/bas2bg_top.png' /></div>
<div style="position: absolute; z-index: 3; top: 0px; right: 0px;"><img src='/news/wp-content/themes/bastheme2/bas2bg_topright.png' /></div>
<div style="position: absolute; z-index: 2; top: 0px; right: 0px;"><img src='/news/wp-content/themes/bastheme2/bas2bg_right.png' /></div>

<div style="position: absolute; z-index: 4; top: 19px; left: 165px;"><a href='/news'><img src='/news/wp-content/themes/bastheme2/news2.png' alt="News" /></a></div>
<div style="position: absolute; z-index: 4; top: 120px; left: 165px;"><a href='/forum'><img src='/news/wp-content/themes/bastheme2/forum.png' alt="Forum" /></a></div>
<div style="position: absolute; z-index: 4; top: 236px; left: 165px;"><a href='/news/calendar'><img src='/news/wp-content/themes/bastheme2/when.png' alt="When: Calender and Times" /></a></div>
<div style="position: absolute; z-index: 4; top: 347px; left: 165px;"><a href='/news/where'><img src='/news/wp-content/themes/bastheme2/where.png' alt="Where: Map and Directions" /></a></div>
<div style="position: absolute; z-index: 4; top: 465px; left: 165px;"><a href='/gallery.html'><img src='/news/wp-content/themes/bastheme2/gallery.png' alt="Omake-kun's Gallery" /></a></div>

<div id="rap">
<div id="content">

<?php
if (is_home()) {
	?>
	<h3>Welcome to Basingstoke Anime Society</h3>
	<p>We hold regular anime evenings in <a href="/map.html">The Red Lion Hotel</a>, Basingstoke. The video program starts at <a href='/news/calendar'>7:00pm every Tuesday</a>, and go on until after 10:00pm. Newcomers are always welcome.</p>

	<table style='width: 100%;'><tr>
	<td width='33%' style='text-align: center;'><a href='/forum'><img src='/news/wp-content/themes/bastheme2/forum-button.png' alt='Forum' /></a><br />&nbsp;</td>
	<td width='33%' style='text-align: center;'><a href='/news/calendar'><img src='/news/wp-content/themes/bastheme2/when-button.png' alt='Calendar' /></a><br />&nbsp;</td></tr>
	<tr>
	<td width='33%' style='text-align: center;'><a href='mailto:marcus@basingstokeanimesociety.com'><img src='/news/wp-content/themes/bastheme2/email-button.png' alt='Contact Us' /></a></td>
	<td width='33%' style='text-align: center;'><a href='/news/map'><img src='/news/wp-content/themes/bastheme2/where-button.png' alt='Map' /></a></td>
	</tr></table>

	<?php

	if ( !function_exists('is_user_logged_in') ) {
		function is_user_logged_in() {
			global $user_ID, $user_nickname;
			get_currentuserinfo();
			echo "<!--  $user_ID  $user_nickname  -->";
			if ( !$user_ID )
				return false;
			return true;
		}
	}

	if (!is_user_logged_in()) {
		echo ("<p>If you'd like to comment on any of the topics below, <a href='/news/wp-register.php'>register</a> or <a href='/forum/login.php'>log in</a>.</p>");
	}
	echo '<p>&nbsp;</p>';
} ?>
<!-- end header -->
