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
	<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<ins class="adsbygoogle" style="display: block; height: 600px;" data-ad-client="ca-pub-9976229156087682"
		data-ad-slot="5989170116" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_0_expand"
			style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:289px;background-color:transparent;"><ins
				id="aswift_0_anchor"
				style="display: block; border: none; height: 600px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 289px; background-color: transparent; overflow: visible;"><iframe
					id="aswift_0" name="aswift_0"
					style="left:0;position:absolute;top:0;border:0;width:289px;height:600px;"
					sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
					width="289" height="600" frameborder="0"
					src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9976229156087682&amp;output=html&amp;h=600&amp;slotname=5989170116&amp;adk=301471872&amp;adf=1687148022&amp;w=289&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1593464093&amp;rafmt=1&amp;psa=1&amp;guci=2.2.0.0.2.2.0.0&amp;format=289x600&amp;url=https%3A%2F%2Fwww.design-cubits.com%2F&amp;flash=0&amp;fwr=0&amp;rpe=1&amp;resp_fmts=4&amp;wgl=1&amp;adsid=ChAI8KLm9wUQ5Jy0n7inxdBvEkgAJpcsmiMlVgHBttMfU_20xIyzPo1sBU_-__7fKs9piHaz0QTp3M-lXkOADm7bScikAhNpxqHMP16-wDRg8WFTdapcx9NUICY&amp;dt=1593464093494&amp;bpp=28&amp;bdt=2568&amp;idt=281&amp;shv=r20200624&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3De14c0bbadc72a3cf%3AT%3D1592704811%3AS%3DALNI_Mb5KTaR4GM_Y_LuhyDlZB-5hZhdGw&amp;correlator=1576887487102&amp;frm=20&amp;pv=2&amp;ga_vid=2064702534.1593464094&amp;ga_sid=1593464094&amp;ga_hid=818616069&amp;ga_fc=0&amp;iag=0&amp;icsg=12883503787&amp;dssz=34&amp;mdo=0&amp;mso=0&amp;u_tz=540&amp;u_his=3&amp;u_java=0&amp;u_h=1050&amp;u_w=1680&amp;u_ah=1027&amp;u_aw=1625&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=173&amp;ady=747&amp;biw=1625&amp;bih=916&amp;scr_x=0&amp;scr_y=0&amp;oid=3&amp;pvsid=1763854471954398&amp;pem=974&amp;rx=0&amp;eae=0&amp;fc=640&amp;brdim=0%2C23%2C0%2C23%2C1625%2C23%2C1625%2C1027%2C1625%2C916&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;cms=2&amp;fu=8336&amp;bc=31&amp;jar=2020-6-19-22&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=hahRbFVGKs&amp;p=https%3A//www.design-cubits.com&amp;dtd=304"
					marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"
					allowfullscreen="true" data-google-container-id="a!1"
					data-google-query-id="CJGXm6r0p-oCFctAwgUd6BcENQ" data-load-complete="true"></iframe></ins></ins>
	</ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script><!-- //google adsence code -->

	< <section class="widget recent-posts">
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

</aside><!-- //blog-sidebar -->