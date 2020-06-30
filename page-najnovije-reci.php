<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title"> 
          <h1>Najnovije reči</h1>
          <h5>SRPSKI REČNIK</h5>
          <p>U nastavku su najnovije reči na akcenat.com</p>
        </div>
        
        <?php

        $najnovije_reci = new WP_Query( array( 'cat' => 1, 'paged' => $paged ));
             if ( $najnovije_reci->have_posts() ) : 
              while ( $najnovije_reci->have_posts() ) : 
                   $najnovije_reci->the_post();
                   get_template_part( 'parts/card/card-page', get_post_format() );
              endwhile; 
          ?>

          <div class="row more-words the-next-btn">
              <?php echo previous_posts_link( '<i class="fas fa-arrow-left"></i> nazad', $najnovije_reci->max_num_pages ); ?> 
              <?php echo next_posts_link( 'napred <i class="fas fa-arrow-right"></i>', $najnovije_reci->max_num_pages ); ?> 
          </div>
          <?php
          endif; 
          ?>
      </div>
      <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
