<?php

/**
 * ACF Block
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 *
 * @package Nax_Custom
 *
 */

require_once get_template_directory() . '/blocks/blocks-functions.php';

the_block_header('icon-bullet-list-block');
while (have_rows('list')) {
    the_row();
    $icon = get_sub_field('icon');
    $title = get_text_esc(get_sub_field('title'));
    $text = get_wysiwyg(get_sub_field('text'));

    
    echo "<article>";
    echo "<div class='icon'>{$icon}</div>";

    echo "<section>";
    if ($title) {
        echo "<h3>{$title}</h3>";
    }
    if ($text) {
        echo "<div class='wysiwyg'>{$text}</div>";
    }
    echo "</section>";
    echo "</article>";
    
}
the_block_footer();
