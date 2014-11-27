<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'fanoe' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title();?></a></h1>
        
        <div class="entry-meta">
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'fanoe' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php echo sprintf( __( '%1$s @ %2$s', 'fanoe' ), get_the_date(), get_the_time() )  ?></a>
        </div><!-- .entry-meta -->
        
        <div class="comments-trackbacks">
            <a href="<?php the_permalink(); ?>#comments-title"><?php fanoe_comment_count(); ?></a>
            <a href="<?php the_permalink(); ?>#trackbacks-title"><?php fanoe_trackback_count(); ?></a>
        </div>
    </header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
           	<?php fanoe_the_post_thumbnail() ?>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fanoe' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'fanoe' ) . '</span>', 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
		<?php fanoe_footer_meta() ?>
        <?php $share_btns_blogview = get_theme_mod( 'share_btns_blogview' ); if($share_btns_blogview == 0){}else{ ?>
            <ul class="social">
                <li><a class="icon-gplus" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" title="<?php _e('Share on Google +', 'fanoe')?>"></a></li>
                <li><a class="icon-twitter" href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?>%20<?php echo urlencode(get_permalink($post->ID)); ?>" target="blank" title="<?php _e('Share on Twitter', 'fanoe')?>"></a></li>
                <li><a class="icon-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;t=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" title="<?php _e('Share on Facebook', 'fanoe')?>"></a></li>
                <li><a class="icon-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" title="<?php _e('Share on LinkedIn', 'fanoe')?>"></a></li>
            </ul>
		<?php }?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->