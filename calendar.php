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
<? fse_print_events(array(
	'number' => 10,
	'before' => "<table id=\"calendar\">\n<thead><tr class=\"calendar_headrow\"><th class=\"calendar_date\">Datum</th><th class=\"calendar_category\">Kategorie</th><th class=\"calendar_location\">Místo</th><th class=\"calendar_event\">Událost</th></tr></thead>\n<tbody>\n",
	'after' => "</tbody\n></table>\n",
	'template' => "<tr class=\"calendar_bodyrow\"><td class=\"calendar_date\">{event_startdate; fmt=\"d.m.Y\";}{event_enddate; fmt=\" - d.m.Y\";}</td><td class=\"calendar_category\">{event_categories}</td><td class=\"calendar_location\">{event_location}</td><td class=\"calendar_event\">{event_subject}</td></tr>\n"
)); ?>
		</div>
	</article>
<?php } } ?>
</section>
<?php
	include('footer.php');
?>