<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
    <!--[if IE]>
    <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
?>

<div class="ui orange inverted sidebar" style="background: #F2711C; padding:10px;">
    <div class="ui container">
        <br>
        <a class="logo ui big inverted labeled icon button" href="<?= esc_url(home_url('/')); ?>" style="text-transform: uppercase; text-align:center">
            <i class="music icon"></i> <?php bloginfo('name'); ?>
        </a>
        <br>
        <br>
        <?php include Wrapper\sidebar_path(); ?>
        <br>
        <?php $country = get_terms( 'country' , array('order' => 'ASC')); ?>
        <!-- <h3>Chansons par pays</h3> -->
        <?php
        foreach ($country as $key) {
            //echo $key->name . '<br>';
        }
        ?>
    </div>
</div>

<div class="pusher">
    <div id="layout" class="ui padded equal height grid stackable">
        <div class="three wide orange computer only column">
            <aside class="main-sidebar">
                <br>
                <a class="logo ui big inverted labeled icon button" href="<?= esc_url(home_url('/')); ?>" style="text-transform: uppercase; text-align:center">
                    <i class="music icon"></i> <?php bloginfo('name'); ?>
                </a>
                <br>
                <br>
                <?php include Wrapper\sidebar_path(); ?>
                <br>
                <?php $country = get_terms( 'country' , array('order' => 'ASC')); ?>
                <!-- <h3>Chansons par pays</h3> -->
                <?php
                foreach ($country as $key) {
                    //echo $key->name . '<br>';
                }
                ?>
            </aside><!-- /.sidebar -->
        </div>
        <div class="thirteen wide column">
            <?php get_template_part('templates/header'); ?>
            <main class="main">
                <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
        </div>
    </div>
</div>


<?php
do_action('get_footer');
//get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>
