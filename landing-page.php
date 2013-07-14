<?php

/*
 * Template Name: Front Page Template
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="large-12 columns" role="main">
    	<div class="banner">
    		<h1>In Balance.<br><span>In mind, In body, In life</span></h1>
    		<p>In Balance Fitness is a great way to exercise and to get your life, body and mind into shape.</p>
    		<p>We provide made to measure exercise programmes to ensure the best, most enjoyable and most effective work out for you.</p>
    		<a href="" class="more-about">More About In Balance</a>
    	</div>

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

<?php get_footer(); ?>