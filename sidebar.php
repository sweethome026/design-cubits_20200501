<aside class="blog-sidebar">
	<section class="widget category">
		<h4 class="widget__ttl category__ttl">カテゴリー</h4>


		<ul class="category__lists">
			<?php // タームの一覧を表示
			$catlist = wp_list_categories(array(
				'title_li' => '', // 空欄→「カテゴリー」というリストの外側に表示されるタイトルを非表示
				'show_count' => 1, // カテゴリの投稿数を表示
				'echo' => 0 // 設定した値を返す
			));
			$catlist = preg_replace('/<\/a> (\([0-9]*\))/', ' <span class="entry-count">$1</span></a>', $catlist); // 投稿数をタグで囲う
			$catlist = str_replace(array('(',')'), '', $catlist); // 投稿数を囲う（）を削除
			echo $catlist; // タームの一覧を表示
		?>
		</ul><!-- //category__lists -->
	</section><!-- //widget category -->

	<!-- google adsence code -->
	<div class="widget ad">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><br />
		<!-- designCubitサイド1 --><br />
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9976229156087682"
			data-ad-slot="5989170116" data-ad-format="auto"></ins><br />
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<!-- //google adsence code -->

	<section class="widget recent-posts">
		<h4 class="widget__ttl recent-posts__ttl">新着記事</h4>
		<div class="recent-posts__container">

			<?php
			$args = array('posts_per_page' => 3);
			$postslist = get_posts($args);
			foreach ($postslist as $post) :  /* ループ開始 */
				setup_postdata($post); ?>
			<article class="recent-posts__article">
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
						echo '<span class="recent-posts__article__info" style="' . esc_attr('background:' . $this_category_color) . ';">';
					}
					?>
				<?php the_category(' '); ?>
				</span>

				<a href="<?php the_permalink(); ?>">
					<p class="recent-posts__article__title"><?php the_title(); ?></p>
					<time class="recent-posts__article__date"
						datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
				</a>
			</article>

			<?php
			endforeach;
			wp_reset_postdata();
			?>

		</div><!-- //recent-posts__container-->
	</section><!-- //widget recent-posts -->

	<section class="widget search">
		<h4 class="widget__ttl search__ttl">検索</h4>
		<?php get_search_form(); ?>

	</section><!-- //widget search -->

	<!-- google adsence code -->
	<div class="widget ad">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><br />
		<!-- designCubitsサイド2 --><br />
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9976229156087682"
			data-ad-slot="7465903312" data-ad-format="auto"></ins><br />
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<!-- //google adsence code -->

	<section class="widget tags">
		<h4 class="widget__ttl tags__ttl">タグ</h4>
		<?php
		// パラメータを指定
		$args = array(
			// タグ名順で指定
			'orderby' => 'name',
			// 昇順で指定
			'order' => 'ASC'
		);
		$posttags = get_tags( $args );
		if ( $posttags ){
			echo ' <div class="tags__container"> ';
			foreach( $posttags as $tag ) {
				echo '<a class="tags__container__link" href="'. get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a>';
			}
			echo ' </div> ';
		}	
		?>
	</section><!-- //widget tags -->

	<!-- google adsence code -->
	<div class="widget ad">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><br />
		<!-- designCubitsサイド3 --><br />
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9976229156087682"
			data-ad-slot="8803035711" data-ad-format="auto"></ins><br />
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<!-- //google adsence code -->

</aside><!-- //blog-sidebar -->