<?php
/**
 * Template Name: カテゴリー記事一覧のテンプレート(category.php)
 */
?>

<?php get_header("category"); ?>

<!-- main -->
<main id="main" class="main">
	<!-- InstanceBeginEditable name="main" -->
	<div class="pagettl">
		<h1 class="pagettl__ttl">ブログ</h1>
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
				$category = get_the_category();
				$cat_name = $category[0]->cat_name;
			?>
			<h2 class="heading"><?php echo $cat_name; ?> の記事一覧</h2>
			<div class="articles">

				<!-- メインループ開始 -->
				<?php
			        if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- 記事データの取得 -->
				<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
					<a class="blog__linkbox" href="<?php the_permalink(); ?>">
						<div class="article__info">
							<!-- 以下spanタグをecho -->
							<?php
					$this_categories = get_the_category();
					$this_categories = $this_categories[0];
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
							<!-- ↓ spanタグの中の文字 -->
							<?php $cat = get_the_category();
					$cat = $cat[0];
					if ($cat->parent) {
						$parent = get_category($cat->parent);
						echo $parent->cat_name;
					} else {
						echo $cat->cat_name;
					} ?>
							<!--テンプレートタグ the_category();を使うと、ul>li>aが出力されるので、カテゴリータイトルのみを取得。-->
							<?php if ($this_categories) { ?>
							</span>
							<?php } ?>
							<time class="article__info__date"
								datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
						</div>
						<div class="article__contents">
							<h2 class="article__title"><?php the_title(); ?></h2>
							<p class="article__exerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
						</div>
					</a>
				</article>

				<?php endwhile; endif; wp_reset_postdata(); ?>
				<!-- //メインループの記述 -->

			</div><!-- //articles -->

			<?php $paged = get_query_var('paged')? get_query_var('paged') : 1;
				$args = array(
				'post_type' => 'post',
				// 'posts_per_page' => 1,
				'paged' => $paged,
				);
				$myposts = new WP_Query($args);
				if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post();
				?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</section>

		<!-- //blog-main -->

		<?php get_sidebar(); ?>
		<!-- //blog-sidebar -->
	</div>
	<!-- //contents -->

	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>