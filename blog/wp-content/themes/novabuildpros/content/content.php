
<article <?php hybrid_attr( 'post' ); ?>>
	
	<?php tha_entry_top(); ?>

	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post. ?>

		<header class="entry-header">
			<?php 
		if ( has_post_thumbnail() ) {
		the_post_thumbnail('large');	
		}?>
        <?php //epic_base_entry_byline(); ?>
        <div class="info_box">
        <span><i class="fa fa-clock-o"></i> <?php esc_html_e( "", "epic-base" ); ?> <?php echo get_the_date(); ?></span>
        <span><i class="fa fa-user"></i><?php esc_html_e( "", "epic-base" ); ?> <?php the_author_posts_link(); ?></span>
        <span><i class="fa fa-comment"></i> <?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ). ' Comment', '% Comments', 'comments-link', '' ); ?></span>
        </div>
        
        <div class="social_share_box">
        <span><i class="fa fa-share-alt"></i> Share: </span>
        <span><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink());?>"><i class="fa fa-facebook"></i></a></span>
        <span><a target="_blank" href="https://twitter.com/share?url=<?php echo esc_url(get_permalink());?>"><i class="fa fa-twitter"></i></a></span>
        <span><a target="_blank" href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink());?>"><i class="fa fa-google-plus"></i></a></span>
        </div>
                                                
        <div class="clearfix"> </div>
			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>

			

		</header><!-- .entry-header -->

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<?php epic_base_entry_footer(); ?>

	<?php else : // If not viewing a single post. ?>
		<header class="entry-header">
		<?php 
		if ( has_post_thumbnail() ) {
		the_post_thumbnail('medium');	
		}?>
			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . esc_url(get_permalink()) . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

			<div class="blog_date"> <?php echo get_the_date(); ?></div>

		</header><!-- .entry-header -->
		
		<div class="blog_desc">
			
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

	<?php endif; // End single post check. ?>

	<?php tha_entry_bottom(); ?>

</article><!-- .entry -->