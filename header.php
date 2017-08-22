<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<base href="/">

		<style>
			@import url('https://fonts.googleapis.com/css?family=Asap:400,500i,700');
		</style>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div>
				<small>Næste event:</small>
				<h2>Åben møde - For nye medlemmer</h2>
			</div>
			<div class="time">
				<p>12:00</p>
			</div>
		</header>
