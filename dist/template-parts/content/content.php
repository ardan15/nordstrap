<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nordstrap
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
    <header class="entry-header">
		<?php 
		the_title( '<h2 class="blog-post-title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				nordstrap_posted_on();
				nordstrap_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header>
	
	<div class="entry-content">
		<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nordstrap' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
