<form role="search"
      method="get"
      class="searchform"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="search-table">
    <div class="search-field"> 
      <input type="search" 
             placeholder="<?php _e( 'Search...', 'avados' ); ?>" 
             value="<?php echo get_search_query(); ?>"
             name="s" />
    </div>
    <button type="submit"  class="search-button">
      <i class="fa fa-search">
      </i>
    </button>  
  </div>
</form>
