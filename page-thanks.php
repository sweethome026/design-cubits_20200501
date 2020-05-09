<?php
/**
 * Template Name: サンクスページのテンプレート
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
		<section class="sent">
			<h4 class="sent__headline">送信が完了しました。</h4>
			<p class="sent__sentence">後ほどご連絡をさせていただきます。<br>この度は大変ありがとうございました。</p>
			<div class="btn btn--back-to-top"><a href="#">Topへ戻る</a></div>
		</section><!-- //sent -->
	</div>
	<!-- //contents -->


	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>