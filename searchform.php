<form method="get" class="search-form navbar-form navbar-right" action="<?php echo esc_url( home_url() ); ?>" role="search">
  <div class="form-group">
    <input type="text" name="s" class="form-control" id="s" value="<?php the_search_query(); ?>" x-webkit-speech="x-webkit-speech">
  </div>
  <input type="submit" class="btn-search" value="">
</form>