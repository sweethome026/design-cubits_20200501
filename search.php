<?php
/**
 * Template Name: 検索結果ページのテンプレート(search.php)
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

	<!-- contents -->
	<div id="contents" class="blog-contents wrap">
		<section class="blog-main">
			<h2 class="heading">
				<?php
				if (isset($_GET['s']) && empty($_GET['s'])) {
				echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
				} else {
				echo '「'.$_GET['s'] .'」の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
				}
				?>
			</h2>
			<?php if (have_posts()): ?>

			<div class="articles">
				<?php while(have_posts()): the_post(); ?>
				<div class="article">
					<a class="blog__linkbox" href="<?php the_permalink(); ?>">
						<div class="article__info">
							<!-- article__info__tag -->
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
								} 
							?>
							<?php if ($this_categories) { ?>
							</span>
							<?php } ?>
							<!-- //article__info__tag -->
							<time class="article__info__date"
								datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?>
							</time>
						</div>
						<div class="article__contents">
							<h2 class="article__title"><?php the_title(); ?></h2>
							<p class="article__exerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
						</div>
					</a>
				</div>
				<?php endwhile; ?>
			</div>
			<?php else: ?>
			<p>検索されたキーワードにマッチする記事はありませんでした</p>
			<?php endif; ?>
		</section><!-- //blog-main -->

		<?php get_sidebar(); ?>
		<!-- //blog-sidebar -->
	</div>
	<!-- //contents -->

	<!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>