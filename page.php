<?php
/**
 * Page
 *
 * Loop container for page content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default_title_img.jpg'; ?>
<?php endif; ?>
<div class="row title_box" style="background-image: url('<?php echo $image; ?>')" >
    <header>
        <h2><?php the_title(); ?></h2>
    </header>
</div><!-- end #category-name -->
    <!-- Main Content -->
    <div class="row">
    	<div class="large-9 columns">
    	
    			<?php if ( have_posts() ) : ?>
    	
    				<?php while ( have_posts() ) : the_post(); ?>
    					<?php get_template_part( 'content', 'page' ); ?>
    				<?php endwhile; ?>
    				
    			<?php endif; ?>
    	
    	</div>
    	<!-- End Main Content -->
    	
    	<?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>