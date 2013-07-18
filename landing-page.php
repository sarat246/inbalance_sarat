<?php

/*
 * Template Name: Front Page Template
 */

get_header(); ?>

<div class="row banner_box">
  <div class="small-12 large-12 columns"></div>
	<div class="small-12 large-6 columns">
		<h1>In Balance.<br><span>In mind, In body, In life</span></h1>
		<p>In Balance Fitness is a great way to exercise and to get your life, body and mind into shape.</p>
		<p>We provide made to measure exercise programmes to ensure the best, most enjoyable and most effective work out for you.</p>
		<a href="" class="button_round white">More About In Balance</a>
	</div>
</div><!--end of row-->



    <!-- Main Content -->
    <div class="row">
      <div class="large-12 columns">
      
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
    </div>
    <!-- End Main Content -->

    <div class="row testimonials">
      <div class="large-12 columns">
        <ul class="testimonial_box">
          <?php query_posts(array( 'post_type' => 'testimonials', 'posts_per_page' => -1 )); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  
                    <li class="testimonial">
                              <p class="center-text testimonial_content"><?php echo get_the_content(); ?></p>
                              <h5 class="center-text client_name">- <?php the_title(); ?></h5>
                          </li>
      
      
                     <?php endwhile; else: ?>
                     <p>Sorry, no posts matched your criteria.</p>
                 <?php endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="small-12 large-6 columns about_box">
        <h1>About Lucy</h1>
        <a href=""><img src="http://www.lionessmarketing.co.uk/inbalance/wp-content/uploads/2013/07/lucy_03.png" alt=""></a>
        <p>I worked for 15 years as a management consultant, and although I was pretty good at it, I was generally stressed out, fed up, tired and miserable. </p><p>A colleague has just run a half marathon, and was pretty evangelical about how great it made her feel, so I decided to give it a go... <a href="">more about lucy</a></p>
      </div>
      <div class="small-12 large-6 columns recent_posts">
        <h1>Latest from the blog</h1>
        <ul>
          <?php $the_query = new WP_Query( 'showposts=2' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <li>
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              <p><?php
                $content = get_the_content();
                $trimmed_content = wp_trim_words( $content, 25, '<a href="'. get_permalink() .'"> ...Read More</a>' );
                echo $trimmed_content;
              ?></p>
            </li>
          <?php endwhile;?>
        </ul>
      </div>
    </div>


<?php get_footer(); ?>