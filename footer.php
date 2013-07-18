<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<div class="row social_box">
      <div class="large-6 columns">
        <h1>Twitter Feed</h1>
      </div>
      <div class="large-6 columns">
        <h1>Follow Us</h1>
      </div>
</div>

</section>
<!-- End Page -->

<!-- Footer -->
<footer class="row footer_box">

<?php if ( dynamic_sidebar('Sidebar Footer One') || dynamic_sidebar('Sidebar Footer Two') || dynamic_sidebar('Sidebar Footer Three') || dynamic_sidebar('Sidebar Footer Four')  ) : else : ?>

<div class="large-12 columns">
	<ul class="inline-list">
	<?php wp_list_pages('title_li='); ?>
	</ul>
</div>

<?php endif; ?>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
<script>
$(document).ready(function(){
  $('.testimonial_box').bxSlider({
	
/*mode: 'fade',
auto: true,
pager: true,
pagerLocation:'top',
controls: false*/
  prevText: '<i class="icon-left-circle-1"></i>',
  nextText:'<i class="icon-right-circle-1"></i>',
  auto: false,
  pager: true
  
  });

  });
</script>
</body>
</html>