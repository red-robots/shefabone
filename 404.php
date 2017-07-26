<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="row-1 main-row">
					<div class="row-1">
						<div class="col-1">
							<header>
								<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
								<div class="spacer"></div>
							</header>
						</div><!--.col-1-->
						<div class="col-2">
							<?php get_template_part('template-parts/search',"form");?>
						</div><!--.col-2-->
					</div><!--.row-1-->
					<div class="row-2">
						<div class="col-1">
							<div class="copy">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'acstarter' ); ?></p>
								<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
							</div><!--.copy-->
						</div><!--.col-1-->
					</div><!--.row-2-->
				</div><!--.row-1-->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
