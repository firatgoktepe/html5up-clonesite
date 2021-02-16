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

?>

<?php

$title = get_field('title'); 

$post_objects = get_field('blog_post');

if( $post_objects ): ?>
    <section class='block blog-post-block <?php echo get_device_type(); ?>'>
      <h2><?php echo $title; ?></h2>
      <main>  
        <?php foreach( $post_objects as $post): ?>
        <?php setup_postdata($post); ?>
                <a href="<?php echo get_permalink($post->ID); ?>"><h3><?php echo get_the_title($post->ID); ?></h3>
                  <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                  <?php echo get_the_excerpt($post->ID); ?>  
                </a>       
        <?php endforeach; ?>
        
      </main>
    </section>
   <?php wp_reset_postdata(); ?> 
<?php endif; ?>




