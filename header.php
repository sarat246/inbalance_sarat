<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<nav class="top-bar">
		<ul class="title-area">
			<li class="name">
				<h1 class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 -0.128 211 52.696" enable-background="new 0 -0.128 211 52.696" xml:space="preserve"><rect y="0" display="none" width="236.8" height="139" class="logo"/><path class="logo_color" d="M0.375 24.278V0.268h5.112v24.01H0.375z"/><path class="logo_color" d="M26.597 24.278L15.15 8.619v15.658h-5.111V0.268h5.255l11.123 15.081V0.268h5.112v24.01H26.597z"/><path class="logo_color" d="M81.345 24.278l-1.512-4.067H69.538l-1.512 4.067h-5.795l9.251-24.01h6.407l9.251 24.01H81.345z M74.685 5.381l-3.743 10.3 h7.487L74.685 5.381z"/><path class="logo_color" d="M91.958 24.278V0.268h5.147v19.51h10.151v4.5H91.958z"/><path class="logo_color" d="M130.107 24.278l-1.512-4.067h-10.293l-1.515 4.067h-5.795l9.252-24.01h6.405l9.25 24.01H130.107z M123.449 5.4 l-3.744 10.331h7.486L123.449 5.381z"/><path class="logo_color" d="M156.494 24.278L145.049 8.62v15.658h-5.111V0.268h5.254l11.123 15.082V0.268h5.113v24.01H156.494z"/><path class="logo_color" d="M165.828 12.292c0-7.415 5.58-12.418 12.814-12.418c5.256 0 8.3 2.8 10 5.867l-4.394 2.2 c-1.008-1.944-3.168-3.492-5.614-3.492c-4.394 0-7.562 3.348-7.562 7.883s3.168 7.9 7.6 7.883c2.446 0 4.606-1.548 5.614-3.492 l4.394 2.124c-1.693 2.987-4.752 5.903-10.008 5.903C171.408 24.7 165.8 19.7 165.8 12.292z"/><path class="logo_color" d="M193.514 24.278V0.268h16.988v4.499h-11.877v5.04h11.625v4.5h-11.625v5.471h11.877v4.5H193.514z"/><path class="logo_color" d="M0.39 52.278V36.267h10.489v1.777H2.382v5.16h8.329v1.775H2.382v7.297L0.39 52.278L0.39 52.278z"/><path class="logo_color" d="M33.038 52.278V36.267h1.992v16.011H33.038z"/><path class="logo_color" d="M63.158 52.278V38.045h-5.064v-1.777h12.145v1.777h-5.088v14.232L63.158 52.278L63.158 52.278z"/><path class="logo_color" d="M104.631 52.278l-9.338-12.771v12.771h-1.991V36.267h2.04l9.217 12.507V30.278h1.992v22H104.631z"/><path class="logo_color" d="M130.719 52.278V36.267h10.488v1.777h-8.498v5.16h8.33v1.775h-8.33v5.521h8.498v1.775h-10.488V52.278z"/><path class="logo_color" d="M163.836 50.022l1.201-1.537c1.031 1.2 2.8 2.3 5 2.305c2.855 0 3.769-1.535 3.769-2.783 c0-4.129-9.479-1.824-9.479-7.537c0-2.641 2.354-4.465 5.52-4.465c2.425 0 4.3 0.8 5.7 2.256l-1.198 1.5 c-1.201-1.344-2.881-1.92-4.634-1.92c-1.896 0-3.288 1.031-3.288 2.543c0 3.6 9.5 1.5 9.5 7.5 c0 2.305-1.584 4.705-5.904 4.705C167.223 52.6 165.2 51.5 163.8 50.022z"/><path class="logo_color" d="M198.326 50.022l1.199-1.537c1.033 1.2 2.8 2.3 5 2.305c2.855 0 3.768-1.535 3.768-2.783 c0-4.129-9.479-1.824-9.479-7.537c0-2.641 2.354-4.465 5.521-4.465c2.424 0 4.3 0.8 5.7 2.256l-1.201 1.5 c-1.198-1.344-2.881-1.92-4.633-1.92c-1.896 0-3.287 1.031-3.287 2.543c0 3.6 9.5 1.5 9.5 7.5 c0 2.305-1.584 4.705-5.901 4.705C201.709 52.6 199.6 51.5 198.3 50.022z"/><rect class="logo_color" y="29.3" width="211" height="2"/><path class="logo_color" d="M55.489 11.896c2.268-0.469 4.14-2.521 4.14-5.508c0-3.204-2.34-6.119-6.911-6.119H30.57v4.499h14.624h0.393h6.014 c1.728 0 2.8 1 2.8 2.521c0 1.548-1.08 2.52-2.808 2.52h-6.407V9.802h-5.112v14.477h13.031c4.607 0 6.983-2.88 6.983-6.516 C60.096 14.8 58.1 12.3 55.5 11.896z M51.817 19.778h-6.623v-5.472h6.623c1.979 0 3.1 1.2 3.1 2.7 C54.877 18.8 53.7 19.8 51.8 19.778z"/></svg>
					</a>
				</h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'menu-bar', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav>

<!-- Begin Page -->
<section role="main">