<?php while (have_posts()) : the_post(); ?>
    <?php $partition =  get_post_meta($post->ID,'song_partition',true); ?>
    <?php $auteur =  get_post_meta($post->ID,'song_author',true); ?>
    <?php $voice_type =  get_post_meta($post->ID,'voice_type'); ?>
    <?php $voice_mp3 =  get_post_meta($post->ID,'song_voice_mp3'); ?>
    <?php $voice_description =  get_post_meta($post->ID,'voice_title'); ?>
    <?php $country = get_the_terms( $post->ID, 'country' ); ?>

    <article <?php post_class(); ?>>
        <header>
            <h1 class="ui huge header">
                <div class="content">
                    <?php the_title(); ?>
                    <div class="sub header"><?php echo $auteur; ?><?php if ($country){ echo ' ,('.$country[0]->name . ')'; } ?></div>
                </div>
            </h1>
        </header>
        <br>
        <div class="entry-content">
            <?php the_content();?>
        </div>
        <br>
        <div class="music">
            <a href="<?php echo esc_url($partition); ?>" class="ui labeled icon button" target="_blank">
                <i class="music icon"></i> Partition
            </a>
            <a href="<?php echo esc_url($partition); ?>" class="ui labeled icon button" download>
                <i class="music icon"></i> Télécharger
            </a>
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
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
