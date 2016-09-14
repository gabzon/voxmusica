<?php
/*
Title: Voix
Description: My cool new metabox
Post Type: song
Capability: manage_options
Order: 0
Priority: high
*/

piklist('field', array(
    'type'          => 'text',
    'field'         => 'song_author',
    'label'         => __('Auteur'),
    'columns'       => 6
));

piklist('field', array(
    'type'          => 'text',
    'field'         => 'song_partition',
    'label'         => __('Partition','sage'),
    'columns'       => 12
));

$voice_type = array(
    'type' => 'select',
    'field' => 'voice_type',
    'label' => __('Type de voix'),
    'columns' => 5,
    'choices' => array(
        ''          => '',
        'soprano'   => 'soprano',
        'alto'      => 'alto',
        'tenor'     => 'tenor',
        'basse'     => 'basse',
        'tutti'     => 'tutti'
    )
);

$voice_mp3 = array(
    'type'          => 'text',
    'field'         => 'song_voice_mp3',
    'label'         => __('Voix MP3'),
    'description'   => __('Veillez rentrer l\'url du mp3'),
    'columns'       => 12
);

$voice_title = array(
    'type'          => 'text',
    'field'         => 'voice_title',
    'label'         => __('Description','sage'),
    'columns'       => 7,
);

piklist('field', array(
    'type'          => 'group',
    'label'         => __('Voix'),
    'template'      => 'field',
    'add_more'      => true,
    'fields'       => array(
        $voice_type,
        $voice_title,
        $voice_mp3
    )
));

?>
