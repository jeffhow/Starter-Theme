<?php
/**
 * Template for displaying search forms in Jeff How Starter
 *
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<form role="search" method="get"  class="form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
    <span class="input-group-btn">
      <button class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
    </span>
    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." value="<?php echo get_search_query(); ?>" name="s">
  </div>
</form>
