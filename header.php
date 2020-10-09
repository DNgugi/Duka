<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'duka' ); ?></a>

	<header class="site-header">
  		<nav class="site-header__menu">
    	 	<div class="logo">
			 <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$duka_description = get_bloginfo( 'description', 'display' );
			if ( $duka_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $duka_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			 </div>
			 <div class="menu-item icon">
				<form role="search" method="get" class= "search-form" action="http://localhost/wordpress/">
					<label>
						<span class="screen-reader-text">Search for:</span>
						<input type="search" class="search-field" placeholder="Search …" value="" name="s">
					</label>
					<input type="submit" class="search-submit" value="Go">
				</form>
			</div>
			<?php
			wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) );
			?>
						 <div aria-controls="primary-menu" aria-expanded="false" class="button toggle"><a href="#"> Menu <i class ="fa fa-arrow-down"></i></a></div>

			
		</nav>
	</header>


		
           
        