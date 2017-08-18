<form role="search" method="get" class="searchform bani-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="text" class="form-control s" name="s" placeholder="<?php esc_html_e('To search, type here and hit enter...', 'bani'); ?>" >
        <span class="input-group-btn">
            <button class="btn btn-secondary search-button" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>
