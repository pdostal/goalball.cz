<?php
	include('header.php');
?>
<section id="main">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article>
		<header>
			<h1><a href="<?php the_permalink(""); ?>"><?php the_title(); ?></a></h1>
			<span class="date"><?php the_time('j. n. Y v G:m') ?></span>
			<span class="category">Kategorie: <?php the_category(', '); ?></span>
			<span class="tags"><?php the_tags('', '', ''); ?></span>
		</header>
		<div class="content"><?php the_content(__('(Celý článek...)')); ?></div>
	</article>
<?php } } ?>
</section>
<?php
	include('footer.php');
?>