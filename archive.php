<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nax_Custom
 */

 
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				wp_get_archives( array( 'type' => 'postbypost', 'limit' => 20, 'format' => 'custom', 'before' => '<div class="my-post-title">', 'after' => '</div> ' ) );
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();


		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

