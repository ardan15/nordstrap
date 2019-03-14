<?php
/**
 * Template part for displaying posts
 * 
 * @package Wordpress
 * @subpackage Nordstrap
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class('pt-5');?> >
    <header class="entry-header">
        <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
    </header>
    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /** */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nordstrap' ),
                    array(
                        'span'  => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            )
        );
        ?>
    </div>
</article>