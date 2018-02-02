<form id="search-input" class="navbar-form navbar-right" method="get"  action="<?php echo home_url( '/' ); ?>">
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s">
        <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
    </div>
</form>
