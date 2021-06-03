<?php get_header();?>

<div class="container pt-5 pb-5">

    <div class="row">

        <div class="col-lg-9">

            <?php if(has_post_thumbnail()):?>
                <div class="text-center mx-2">
                    <img src="<?php the_post_thumbnail_url('blog-single')?>" class="img-fluid">
                </div>
            <?php endif; ?>

            <h1 class="text-center py-2"><?php the_title();?></h1>

            <?php if ( have_posts() ) : while(have_posts()) : the_post();?>
                <?php the_content(); ?>
                
            <?php endwhile; endif; ?>
            
            <?php echo the_tags();?>
            
        </div>

        <div class="col-lg-3 blog-side-bar">
            <div class="card">
                <div class="card-body">
                    <?php dynamic_sidebar('blog-sidebar');?>
                </div>
            </div>
        </div>



    </div>
</div>
<?php get_footer();?>