<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
      <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8 blog-content">
        <div class="word-top">
          <h1><span>Skraćenica </span><?php the_title(); ?></h1>
          <div class="divider"></div>
        </div>
        <?php
            $query = new WP_Query(  array( 'cat' => get_cat_ID( 'skracenica' ) ) );
             if ( have_posts() ) : 
              while ( have_posts() ) : 
      
                  the_post();
                  the_post_thumbnail();
                  echo '<h4 class="mt-4">';
                    the_field('skracenica');
                  echo '</h4>'; 
          
              endwhile; 
            endif;
          ?>
        </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'skracenica'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>