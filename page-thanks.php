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

	<!-- プラグイン「Breadcrumb NavXT」を使ったパンくずリスト -->
	<div class="breadcrumbs wrap">
		<?php
		if ( function_exists( 'bcn_display' ) ) {
		bcn_display();
		}
		?>
	</div>


	<!-- contents -->
	<div id="contents" class="wrap">
		<section class="sent">
			<h4 class="sent__headline">送信が完了しました。</h4>
			<p class="sent__sentence">後ほどご連絡をさせていただきます。<br>この度は大変ありがとうございました。</p>
			<p class="sent__sentence">
				※通常4営業日以内にご返答いたしますが、お問い合わせ内容によってはご返信しかねる場合がございます。あらかじめご了承ください。</p>
			<div class="btn btn--back-to-top"><a href="https://design-cubits.com/">Topへ戻る</a></div>
		</section><!-- //sent -->
	</div>
	<!-- //contents -->


	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>