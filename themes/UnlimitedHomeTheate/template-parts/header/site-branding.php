<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


?>
<div class="site-branding" style="margin-bottom:250px">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">t
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
		</div><!-- .site-branding-text -->

		<div id="top-menu"> 
			<div class="row">
				<div class="col-sm-12 col-md-6 left-nav"> 
					<div class="top-menu-row left-nav"> 
						<div class="col-xs-4">
							<a class="menu-tile" href="#about"> 
								<div class="menu-container"> 
									<div>
										<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
									</div> 
									About
								</div> 
							</a> 
						</div> 
						<div class="col-xs-4">
							<a class="menu-tile" href="#about"> 
								<div class="menu-container"> 
									<div>
										<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
									</div> 
									About
								</div> 
							</a> 
						</div> 
						<div class="col-xs-4">
							<a class="menu-tile" href="#about"> 
								<div class="menu-container"> 
									<div>
										<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
									</div> 
									About
								</div> 
							</a> 
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 right-nav"> 
					<div class="top-menu-row right-nav"> 
						<div class="col-xs-4">
							<a class="menu-tile" href="#about"> 
								<div class="menu-container"> 
									<div>
										<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
									</div> 
									About
								</div> 
							</a> 
						</div> 
						<div class="col-xs-4">
							<a class="menu-tile" href="#about"> 
								<div class="menu-container"> 
									<div>
										<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
									</div> 
									About
								</div> 
							</a> 
						</div> 
						<div class="col-xs-4">
							<a class="menu-tile" href="#about"> 
								<div class="menu-container"> 
									<div>
										<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
									</div> 
									About
								</div> 
							</a> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
