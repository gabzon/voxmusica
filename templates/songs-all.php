<?php
// WP_Query arguments
$args = array (
    'post_type'     => array( 'song' ),
    'category_name' => 'display',
    'posts_per_page' => -1
);
// The Query
$query = new WP_Query( $args );

?>
<!-- The Loop  -->
<?php if ( $query->have_posts() ):?>
    <?php while ( $query->have_posts() ): ?>
        <?php $query->the_post(); ?>
        <?php $partition =  get_post_meta($post->ID,'song_partition',true); ?>
        <?php $auteur =  get_post_meta($post->ID,'song_author',true); ?>
        <?php $voice_type =  get_post_meta($post->ID,'voice_type'); ?>
        <?php $voice_mp3 =  get_post_meta($post->ID,'song_voice_mp3'); ?>
        <?php $voice_description =  get_post_meta($post->ID,'voice_title'); ?>
        <?php $country = get_the_terms( $post->ID, 'country' ); ?>

        <div class="ui styled fluid accordion">
            <div class="title" style="text-transform:uppercase; font-weight:bold">
                <i class="dropdown icon"></i>
                <?php the_title(); ?>
            </div>
            <div class="content">
                <?php echo $auteur . ' '; ?>
                <?php if ($country): ?>
                    (<?php echo $country[0]->name; ?>)
                <?php endif; ?>
                <br>
                <br>
                <div class="music">
                    <div class="ui grid stackable">
                        <div class="six wide column">
                            <div class="ui  left labeled button" tabindex="0">
                                <a class="ui basic orange right pointing label" target="_blank" href="<?php echo esc_url($partition); ?>">
                                    <i class="music icon"></i> Ouvrir partition
                                </a>
                                <a class="ui orange button" href="<?php echo esc_url($partition); ?>" download>
                                    <i class="download icon"></i> Télécharger
                                </a>
                            </div>
                        </div>
                        <div class="ten wide column">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th>Type de voix</th>
                                <th>Description</th>
                                <th>Chanson</th>
                                <th style="text-align:center">Télécharger</th>
                            </tr>
                        </thead>
                        <?php for ($i=0; $i < count($voice_type) ; $i++):?>
                            <tr>
                                <td style="text-transform:capitalize"><?php echo $voice_type[$i]; ?></td>
                                <td><?php echo $voice_description[$i]; ?></td>
                                <td >
                                    <audio controls><source src="<?php echo $voice_mp3[$i]; ?>" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td style="text-align:center"><a href="<?php echo $voice_mp3[$i]; ?>" download><i class="download orange circular icon"></i></a></td>
                            </tr>
                        <?php endfor ?>
                    </table>
                </div>
            </div>
        </div>
    <?php endwhile ?>
<?php else: ?>
    // no posts found
<?php endif ?>

<!-- Restore original Post Data -->
<?php  wp_reset_postdata();?>
