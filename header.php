<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body <?php

$body_classes = array();
$body_classes[] = 'side-menu-closed';
$body_classes[] = 'no-js';
$body_classes[] = ffThemeOptions::getQuery('post posts-opening');

body_class( $body_classes );

?>>


<script>
	$(function() {
		//var v=document.getElementsByClassName("youtube-player");
		 $( ".youtube-player" ).each(function() {
			var p = document.createElement("div");
			p.innerHTML = labnolThumb(this.dataset.id);
			p.onclick = labnolIframe;
			this.appendChild(p);
		});
	});

	function labnolThumb(id) {
		return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
	}

	function labnolIframe() {
		var iframe = document.createElement("iframe");
		iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
		iframe.setAttribute("frameborder", "0");
		iframe.setAttribute("id", "youtube-iframe");
		this.parentNode.replaceChild(iframe, this);
	}
</script>


<style>
	.youtube-container { display: block; margin: 20px auto; width: 100%; max-width: 600px; }
	.youtube-player { display: block; width: 100%; /* assuming that the video has a 16:9 ratio */ padding-bottom: 56.25%; overflow: hidden; position: relative; width: 100%; height: 100%; cursor: hand; cursor: pointer; display: block; }
	img.youtube-thumb { bottom: 0; display: block; left: 0; margin: auto; max-width: 100%; width: 100%; position: absolute; right: 0; top: 0; height: auto }
	div.play-button { height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url("http://blog.treble.fm/wp-content/uploads/2016/01/treble-play-button-2.png") no-repeat; }
	#youtube-iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; }
</style>

	<?php get_template_part('templates/blocks/loader-1/loader-1'); // needs to be first in body ?>
	<div class="master-wrapper">
		<header class="header">
			<?php get_template_part('templates/sections/header-1/header-1'); ?>
		</header>
		<div class="content-wrapper">