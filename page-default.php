<?php
/**
 * Template Name: 固定ページのテンプレート（page-default.php）
 */
?>
<?php get_header("pagedefault"); ?>

<!-- main -->
<main id="main" class="main">
	<!-- InstanceBeginEditable name="main" -->
	<div class="pagettl">
		<h1><?php echo get_the_title(); ?></h1>
	</div>


	<div class="breadcrumbs wrap">
		<ol>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
			<li><?php echo get_the_title(); ?></li>
		</ol>
	</div>


	<!-- contents -->
	<div id="contents" class="wrap">
		<?php if (have_posts()): while (have_posts()):the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<!-- //contents -->

	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>