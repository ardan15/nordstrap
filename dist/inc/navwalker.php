<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Class Name: Nordstrap_Walker
 * Description: Custom current bootstrap theme nav walker
 * Author: Vega Aridani
 * Version: 0.0.1
 * Author URI: https://github.com/ardan15/
 * License: GPL-3.0+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */
/* Check if Class Exists. */
if ( !class_exists('Nordstrap_Walker') ) {

    class Norstrap_Walker extends Walker_Nav_menu {
            
        function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
            $object = $item->object;
            $type = $item->type;
            $title = $item->title;
            $description = $item->description;
            $permalink = $item->url;

            $output .= "";

            if ( $permalink && $permalink != '#' ) {
                $output .= '<a href="'. $permalink .'" class="p-2 text-muted">';
            } else {
                $output .= '<span class="p-2 text-muted">';
            }

            $output .= $title;

            if ( $description != '' && $depth == 0 ) {
                $output .= '<small class="description">' . $description . '</small>';
            }

            if ( $permalink && $permalink != '#' ) {
                $output .= '</a>';
            } else {
                $output .= '</span>';
            }
        }

    }

}
