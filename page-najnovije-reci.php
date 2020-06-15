<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <div class="duga-reklama">Reklama</div>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title"> 
          <h1>Najnovije reči</h1>
          <h5>SRPSKI REČNIK</h5>
          <p>U nastavku su najnovije reči na akcenat.com</p>
        </div>
        
        <?php

        $najnovije_reci = new WP_Query( array( 'cat' => 1, 'posts_per_page' => 10 ));
             if ( $najnovije_reci->have_posts() ) : 
              while ( $najnovije_reci->have_posts() ) : 
                   $najnovije_reci->the_post();
                   get_template_part( 'parts/card/card-page', get_post_format() );
          
              endwhile; 
            endif;
            wp_reset_postdata();
          ?>

        <div class="row more-words">
          <a href="/lista-novijih-reci" class="red-btn">Pogledaj još <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
