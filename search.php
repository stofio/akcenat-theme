<?php get_header(); ?>

<div class="container">
    <div class="row">

    <div class="col-lg-2 col-md-0">
        <div class="duga-reklama">Reklama</div>
    </div>
    <div class="col-lg-6 col-md-8">  
        <?php
            $the_query = new WP_Query( 
                array( 'cat' => 1,
                       'posts_per_page' => 2,
                       'paged' => $paged ));

            if ($the_query->have_posts()):
                ?>
                <h1 class="blog-page-title mb-4 text-center">Pretražili ste: <?php the_search_query(); ?></h1>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                        get_template_part( 'parts/card/card-page', get_post_format() );
                endwhile;
        ?>
    <div class="row more-words the-next-btn mt-5">
        <?php echo previous_posts_link( '<i class="fas fa-arrow-left"></i> nazad', $the_query->max_num_pages ); ?> 
        <?php echo next_posts_link( 'napred <i class="fas fa-arrow-right"></i>', $the_query->max_num_pages ); ?> 
    </div>
    <?php
    endif;
    ?>
    </div>
    <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
    </div>
</div>

<?php get_footer(); ?>
