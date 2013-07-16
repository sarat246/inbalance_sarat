<?php

/*
 * Template Name: Front Page Template
 */

get_header(); ?>

    	<div class="banner">
    		<h1>In Balance.<br><span>In mind, In body, In life</span></h1>
    		<p>In Balance Fitness is a great way to exercise and to get your life, body and mind into shape.</p>
    		<p>We provide made to measure exercise programmes to ensure the best, most enjoyable and most effective work out for you.</p>
    		<a href="" class="button_round white">More About In Balance</a>
    	</div>

    <!-- Main Content -->
    <div class="large-12 columns" role="main">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
					<?php endif; ?>
					
					<?php the_content(); ?>
				</article>

			<?php endwhile; ?>		
		<?php endif; ?>

    </div>
    <!-- End Main Content -->

    <div class="large-12 columns testimonials">
    	<article class="testimonial_box">
    		<?php query_posts(array( 'post_type' => 'testimonials', 'posts_per_page' => -1 )); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
            			<div class="client_message"><?php the_content(); ?></div>

                   <?php endwhile; else: ?>
                   <p>Sorry, no posts matched your criteria.</p>
               <?php endif; ?>
               <div class="slider_control"><p><span id="slider-prev"></span><span id="slider-next"></span></p></div>
            <?php wp_reset_query(); ?>
    	</article>
    </div>

<?php get_footer(); ?>