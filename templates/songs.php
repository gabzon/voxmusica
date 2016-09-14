<?php
/**
* Template Name: Chansons
*/
?>

<div id="song-list" class="ui top attached tabular inverted orange menu">
    <a class="active item" data-tab="first"><?php _e('Chansons actuelles'); ?></a>
    <a class="item" data-tab="second"><?php _e('Toutes les chansons'); ?></a>
</div>
<div class="ui bottom attached active tab segment" data-tab="first">
    <?php get_template_part('templates/songs-now'); ?>
</div>
<div class="ui bottom attached tab segment" data-tab="second">
    <?php get_template_part('templates/songs-all'); ?>
</div>
