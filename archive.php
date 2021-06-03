<?php get_header();?>

<div class="container pt-4 pb-4">
    <div class="row">

        <div class="col-lg-9">

            <?php if ( have_posts() ) : while(have_posts()) : the_post();?>

                <div class="card mt-4 mb-4">
                    <div class="card-body">

                        <?php if(has_post_thumbnail()):?>
                            <img src="<?php the_post_thumbnail_url('smallest')?>" class="img-fluid m-2">
                        <?php endif; ?>

                        <div class="blog-content p-2">
                            
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink();?>" class="btn btn-secondary">Read More</a>

                        </div>

                    </div>	
                </div>

            <?php endwhile; endif; ?>
        </div>

        <div class="col-lg-3 blog-side-bar">
            <div class="card mt-4 mb-4">
                <div class="card-body">
                    <?php dynamic_sidebar('blog-sidebar');?>
                </div>
            </div>
        </div>


    </div>


    <!-- Pagination -->
    <?php
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    ?>
      
</div>

<?php get_footer();?>