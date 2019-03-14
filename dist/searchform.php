<?php
/**
 * Template for displaying search forms in Nordstrap
 *
 * @package WordPress
 * @subpackage Nordstrap
 * @since Nordstrap 1.0
 */
?>
<form class="form-inline" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <label for="s" class="assistive-text sr-only"><?php _e( 'Search', 'nordstrap' ); ?></label>
        <input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'nordstrap' ); ?>" />
    </div>
    <button type="submit" class="btn btn-primary ml-2" name="submit"><?php esc_attr_e( 'Search', 'nordstrap' ); ?></button>
</form>