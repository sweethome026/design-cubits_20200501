<?php
/**
 * Template Name: 404エラーページのテンプレート
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
			<li>404 Not Found</li>
		</ol>
	</div>


	<!-- contents -->
	<div id="contents" class="wrap">
		<h4 class="sent__headline">404 Not Found</h4>
		<p class="sent__sentence">お探しのページが見つかりませんでした。<br>申し訳ございませんが、以下のボタンよりトップページへお戻りください。</p>
		<div class="btn btn--back-to-top"><a href="#">Topへ戻る</a></div>
	</div>
	<!-- //contents -->


	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>