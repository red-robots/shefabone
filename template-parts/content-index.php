<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

$background_image = get_field("background_image");
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?> <?php 
	if($background_image):
		echo 'style="background-image: url('.$background_image['url'].');"';
	endif;
?>>
	<?php $title = get_field("title");
	$sub_heading = get_field("sub_heading");
	$copy = get_field("copy");
	$learn_more_link = get_field("learn_more_link");
	$learn_more_text = get_field("learn_more_text");
	$bottom_buttons = get_field("bottom_buttons");?>
	<?php if($background_image):?>
		<img class="mobile" src="<?php echo $background_image['sizes']['medium'];?>" alt="<?php echo $background_image['alt'];?>">
	<?php endif;?>
	<div class="row-1 clear-bottom">
		<section class="col-1">
			<?php if($title):?>
				<header>
					<h1><?php echo $title;?></h1>
				</header>
			<?php endif;?>
			<?php if($sub_heading):?>
				<div class="sub-heading">
					<?php echo $sub_heading;?>
				</div><!--.sub-heading-->
			<?php endif;?>
			<?php if($copy):?>
				<div class="copy">
					<?php echo $copy;?>
				</div><!--.copy-->
			<?php endif;?>
			<?php if($learn_more_link&&$learn_more_text):?>
				<div class="learn-more">
					<a href="<?php echo $learn_more_link;?>">
						<?php echo $learn_more_text;?>
					</a>
				</div><!--.learn-more-->
			<?php endif;?>
		</section><!--.col-1-->
		<?php if($bottom_buttons):?>
			<aside class="col-2">
				<?php foreach($bottom_buttons as $row):
					if($row['button_link']&&$row['button_text']):?>
						<div class="button">
							<a href="<?php echo $row['button_link'];?>">
								<?php echo $row['button_text'];?>
							</a>
						</div><!--.button-->
					<?php endif;
				endforeach;?>
			</aside><!--.col-2-->
		<?php endif;?>
	</div><!--.row-1-->
</article><!-- #post-## -->
