<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/eileenstx" class="soc-icon tw"></a>
					<a href="https://www.facebook.com/eileen.schaubert" class="soc-icon fb"></a>
					<a href="https://www.linkedin.com/in/eileen-schaubert/" class="soc-icon ln"></a>
					<!-- <a href="" class="soc-icon db"></a> -->
					<a href="https://github.com/eileenschaubert" class="soc-icon gh"></a>
					<a href="https://www.instagram.com/eileen.schaubert" class="soc-icon in"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
