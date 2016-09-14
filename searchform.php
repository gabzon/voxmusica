<form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
    <div class="ui left icon input">
        <input type="text" placeholder="<?php _e('Rechercher', 'sage'); ?>" value="<?= get_search_query(); ?>" name="s">
        <i class="search icon"></i>
    </div>
</form>
