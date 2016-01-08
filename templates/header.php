<?php
//use Roots\Sage\Nav\NavWalker;
$menu_name = 'primary_navigation';
?>

<header class="ui secondary padded grid menu">
    <div class="mobile only row">
        <div class="item">
            <a class="ui inverted orange button" id="menu-button"><i class="sidebar icon"></i>MENU</a>
        </div>
        <div class="right menu">
            <div class="item">
                <?php  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ( (array) $menu_items as $key => $menu_item ) :
                        $class = $menu_item->classes; ?>
                        <a href="<?php echo $menu_item->url; ?>" class="ui inverted orange button" style="margin-right:5px;">
                            <?php echo $menu_item->title; ?>
                        </a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="tablet only row">
        <div class="item">
            <a class="ui inverted orange button" id="menu-button"><i class="sidebar icon"></i>MENU</a>
        </div>
        <div class="right menu">
            <div class="item">
                <?php  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ( (array) $menu_items as $key => $menu_item ) :
                        $class = $menu_item->classes; ?>
                        <a href="<?php echo $menu_item->url; ?>" class="ui inverted orange button" style="margin-right:5px;">
                            <?php echo $menu_item->title; ?>
                        </a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="computer only row">
        <div class="right menu">
            <div class="item">
                <?php  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    foreach ( (array) $menu_items as $key => $menu_item ) :
                        $class = $menu_item->classes; ?>
                        <a href="<?php echo $menu_item->url; ?>" class="ui inverted orange button" style="margin-right:5px;">
                            <?php echo $menu_item->title; ?>
                        </a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</header>
