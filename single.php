<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
      <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="word-top">
          <h1><span>Šta znači </span><?php the_title(); ?></h1>
          <div class="divider"></div>
          <h6>DEFINICIJE</h6>
        </div>
        <?php
             if ( have_posts() ) : 
              while ( have_posts() ) : 
      
                  the_post();
                  get_template_part( 'parts/card/card-single', get_post_format() );
          
              endwhile; 
            endif;
          ?>
        </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'single'); ?>
      </div>
      <div class="divider mt-5"></div>
      <?php get_template_part('parts/section/section', 'by-letters'); ?>
    </div>
  </section>

<?php get_footer(); ?>