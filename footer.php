    <!-- footer -->
    <footer id="footer" class="footer">

    	<!-- pagetop -->
    	<div id="pagetop">
    		<a href="#">
    			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/pagetop_img.svg" alt="ページトップボタン">
    		</a>
    	</div>
    	<!-- //pagetop -->

    	<div class="footer__content wrap">
    		<ul class="footer__menu">
    			<li class="footer__menu__item txt-link" class="">
    				<?php
							$page = get_page_by_path('services');
							?>
    				<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>">サービス紹介</a>
    			</li>
    			<li class="footer__menu__item txt-link">
    				<?php
							$page = get_page_by_path('about');
							?>
    				<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>">design cubitsについて</a>
    			</li>
    			<li class="footer__menu__item txt-link">
    				<?php
							$page = get_page_by_path('blog');
							?>
    				<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>">ブログ</a>
    			</li>
    			<li class="footer__menu__item txt-link">
    				<?php
							$page = get_page_by_path('contact');
							?>
    				<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>">お問い合わせ</a>
    			</li>
    		</ul>
    		<ul class="footer__under">
    			<li class="privacy-policy"><?php
							$page = get_page_by_path('privacy-policy');
							?>
    				<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>"><small>プライバシーポリシー</small></a>
    			</li>
    		</ul>
    	</div>
    </footer>
    <!-- //footer -->

    <?php wp_footer(); ?>
    </body>
    <!-- InstanceEnd -->

    </html>