
<?php get_header();?>

<div id="hero">
	<div class="container d-flex align-items-center h-100">
		<h1><?php the_title();?></h1>
	</div>
</div>

<div class="page-content">
	<div class="container">

		<?php if ( have_posts() ) : while(have_posts()) : the_post();?>

		<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</div>
</div>

<div class="grid-container">

	<div class="swiper-container">

		<div class="swiper-wrapper">
			<?php foreach(get_field('frontpage_gallery_field') as $image) : ?>
				<img class="swiper-slide" src="<?php echo $image['sizes']['large']?>">
			<?php endforeach;?>
		</div>

		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		
	</div>

</div>	

<?php get_footer();?>