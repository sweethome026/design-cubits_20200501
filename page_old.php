<?php
//Template Name: 固定ページのテンプレート
?>
<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
	<!-- InstanceBeginEditable name="main" -->
	<?php if (have_posts()): while (have_posts()):the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>