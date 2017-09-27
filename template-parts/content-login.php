<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-login"); ?>>
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
				</div><!--.copy-->
				<?php if(isset($_GET['login'])&&$_GET['login']==="failed"):?>
					<div class="messages copy">
						<p>We're sorry that combination isn't valid!</p>
					</div>
				<?php else: if(isset($_GET['login'])&&$_GET['login']==="empty"):?>
					<div class="messages copy">
						<p>Please enter your credentials!</p>
					</div>
					<?php endif;
				endif;?>
				<?php shefa_wp_login_form();?>
				<?php $registration_title = get_field("registration_title");
				if($registration_title):?>
					<header>
						<h2><?php echo $registration_title;?></h2>
					</header>
				<?php endif;?>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]');?>
			</div><!--.col-1-->
		</div><!--.row-2-->
	</section><!--.row-1-->
</article><!-- #post-## -->
