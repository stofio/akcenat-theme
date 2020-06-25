<?php get_header(); ?>


<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
      <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8 blog-content">
        <div class="word-top">
          <h1><?php the_title(); ?></h1>
          <div class="divider"></div>
        </div>
        <?php
            $query = new WP_Query(  array( 'cat' => 2 ) );
             if ( have_posts() ) : 
              while ( have_posts() ) : 
      
                  the_post();
                  the_post_thumbnail();
                  echo '<div class="mt-4">';
                  the_content();
                  echo '</div>'; 
          
              endwhile; 
            endif;
          ?>
        </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'single-blog'); ?>
      </div>
    </div>
  </section>


<?php get_footer(); ?>