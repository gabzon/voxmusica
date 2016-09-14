<style>
@media only screen and (min-width: 767px) {
    .mobile-hide{
        display: none !important;
    }
}
</style>
<?php $menu_name = 'primary_navigation'; ?>
<header class="ui secondary padded menu">
    <div class="mobile-hide">
        <div class="item">
            <a class="ui inverted orange button" id="menu-button"><i class="sidebar icon"></i>MENU</a>
        </div>
    </div>
    <div class="right menu">
        <div class="nav">
            <?php  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                foreach ( (array) $menu_items as $key => $menu_item ) :
                    $class = $menu_item->classes; ?>
                    <a href="<?php echo $menu_item->url; ?>" class="ui inverted orange button" class="item" style="margin-right:5px;">
                        <?php echo $menu_item->title; ?>
                    </a>
                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</header>
