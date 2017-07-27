<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
	<section class="row-1 main-row">
		<div class="row-1">
			<div class="col-1">
				<header>
					<h1><?php the_title();?></h1>
					<div class="spacer"></div>
				</header>
			</div><!--.col-1-->
			<aside class="col-2">
				<?php get_template_part('template-parts/search',"form");?>
			</aside><!--.col-2-->
		</div><!--.row-1-->
		<div class="row-2">
			<div class="col-1">
				<div class="copy">
					<?php the_content();?>
					<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
				</div><!--.copy-->
			</div><!--.col-1-->
		</div><!--.row-2-->
	</section><!--.row-1-->
</article><!-- #post-## -->
