<?php
/**
 * Extra for this theme
 *
 *
 * @package Nordstrap
 */

add_filter( 'excerpt_length', 'nordstrap_excerpt_length', 999 );
if ( ! function_exists( 'nordstrap_excerpt_length' ) ) {
    function nordstrap_excerpt_length( $length ) {
        return 20;
    }
}

add_filter( 'excerpt_more', 'nordstrap_excerpt_more' );
if ( ! function_exists( 'nordstrap_excerpt_more' )  ) {
    function nordstrap_excerpt_more( $more ) {
        return '...';
    }
}