<?php get_header(); ?>

<div class="container">
    <div class="row">

    <div class="col-lg-2 col-md-0">
        <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
    </div>
    <div class="col-lg-6 col-md-8">  
        <h1 class="blog-page-title mb-4 text-center"> <?php the_title(); ?> </h1>
        <?php
            if (have_posts()):
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
        ?>
    </div>
    <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
    </div>
</div>

<?php get_footer(); ?>
