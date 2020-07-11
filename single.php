<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
	<div class="pagettl">
		<p class="pagettl__ttl">ブログ</p>
		<p class="pagettl__description">フリーランスとして働くWebデザイナーの備忘録・メモ</p>
	</div>

	<div class="breadcrumbs wrap">
		<?php
		if ( function_exists( 'bcn_display' ) ) {
		bcn_display();
		}
		?>
	</div>

	<!-- contents -->
	<div id="contents" class="blog-contents wrap">
		<section class="blog-main">
			<?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>

				<header class="single-article__header">
					<div class="article__header__info article__info">
						<!-- カテゴリーは配列で返ってくる。
						まずget_the_category();で投稿が分類されているカテゴリーを配列で取得。
						$this_categories[0];で、返ってきたカテゴリー情報の「1番目の情報」を取得している。
						-->
						<?php $this_categories = get_the_category();
						$this_categories = $this_categories[0];
						// ↓$this_categoriesの中のcategory_parentという変数の値を取り出そうとしている。category_parentは(整数) 親カテゴリーの ID - 親がなければ 0 が入る（parent にも同じ値が入る）。
						$parent_cat = $this_categories;
						if ($this_categories->category_parent) { //category_parentは親カテゴリの「ID」
						$parent_cat = get_category($this_categories->category_parent);
						}
						if ($this_categories) {
						$this_category_color = get_field('catcolor', 'category_' . $parent_cat->term_id);
						$this_category_name = $parent_cat->name;
						echo '<span class="article__info__tag" style="' . esc_attr('background:' . $this_category_color) . ';">';
						}
						?>
						<?php the_category(' '); ?>
						</span>

						<time class="article__info__date"
							datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
					</div>
					<h1 class="single-article__header__heading">
						<?php the_title(); ?>
						<?php the_field('catcolor'); ?>
						<!--投稿画面でタグ色を設定しているが、項目が出ない-->
					</h1>
				</header>
				<div class="ad">
					<!-- google adsence code -->
					<style>
					.responsive-test {
						width: 320px;
						height: 100px;
					}

					@media(min-width: 470px) {
						.responsive-test {
							width: 100%;
							height: 60px;
						}
					}

					@media(min-width: 730px) {
						.responsive-test {
							width: 100%;
							height: 90px;
						}
					}
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- designCubitsコンテンツ1 -->
					<ins class="adsbygoogle responsive-test" style="display:inline-block"
						data-ad-client="ca-pub-9976229156087682" data-ad-slot="5849569316" style="height:90px"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>

					<!-- //google adsence code -->
				</div>
				<div class="single-article__contents">
					<?php the_content(); ?>
				</div>
				<div class="ad">
					<style>
					.responsive-test {
						width: 320px;
						height: 100px;
					}

					@media(min-width: 470px) {
						.responsive-test {
							width: 100%;
							height: 60px;
						}
					}

					@media(min-width: 730px) {
						.responsive-test {
							width: 100%;
							height: 90px;
						}
					}
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- designCubitsコンテンツ2 -->
					<ins class="adsbygoogle responsive-test" style="display:inline-block"
						data-ad-client="ca-pub-9976229156087682" data-ad-slot="7326302516"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					<!-- //google adsence code -->
				</div>
				<footer class="single-article__footer">
					<div class="pager noicon">
						<span class="pager__item prev"><?php previous_post_link('%link','前へ'); ?></span>
						<span class="pager__item next"><?php next_post_link('%link', '次へ'); ?></span>
					</div>
				</footer>
			</article>
			<?php
        endwhile;
      endif;
      ?>

		</section><!-- //blog-main -->

		<?php get_sidebar(); ?>
		<!-- //blog-sidebar -->
	</div>
	<!-- //contents -->
</main>
<!-- //main -->



<?php get_footer(); ?>