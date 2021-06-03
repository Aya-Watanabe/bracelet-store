<?php get_header();?>

<!-- <div class="page-container container">
    
	
</div> -->

<div class="page-content">
	<div class="container">

		<img src="<?php the_post_thumbnail_url('banner'); ?>" class="img-fluid pb-3">
		
		<div class="page-texts">
			<h1 class="text-center"><?php the_title();?></h1>
			
			<?php if ( have_posts() ) : while(have_posts()) : the_post();?>

			<?php the_content(); ?>
				
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer();?>