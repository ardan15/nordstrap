<?php
/**
 * Displays the post header
 * 
 * @package Wordpress
 * @subpackage Nordstrap
 * @since 1.0.0
 */
?>

<?php the_title( '<h1 class="entry-title mb-3">', '</h1>' ); ?>

<div class="entry-meta">
    <div class="author-meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 );?>
    </div>
</div>