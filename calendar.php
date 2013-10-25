<?php
	/*
	Template Name: Calendar
	*/
	include('header.php');
	include('sidebar.php');
?>
<section id="main">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article>
		<div class="content">
<?
	fse_print_events(
		array(
			'number'   => 10,
			'before'   => '<ul id="calendar">',
			'after'    => '</ul>',
			'template' => '<li><i>{event_startdate}</i> {event_subject}</li>'
		)
	);
?>
		</div>
	</article>
<?php } } ?>
</section>
<?php
	include('footer.php');
?>