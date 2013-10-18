<?php
	include('header.php');
	include('sidebar.php');
?>
<section id="main">
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<article>
		<header>
			<h1 class="title"><a href="<?php the_permalink(""); ?>"><?php the_title(); ?></a></h1>
			<span class="date"><?php the_time('j. n. Y v G:m') ?></span>
		</header>
		<div class="content"><?php the_content(__('(Celý článek...)')); ?></div>
	</article>
<?php } } ?>
</section>
<?php
	include('footer.php');
?>