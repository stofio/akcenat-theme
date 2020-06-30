<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
      <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title">
          <h1>SKRAĆENICE</span>
          </h1>
          <h5>ARHIVA</h5>
        </div>
        <div class="blog-posts mt-4">
          <div class="other-posts d-flex">
            <?php 
            
            $posts = new WP_Query( 
                array( 'cat' => 3,
                'paged' => $paged
                ));        
                if ( $posts->have_posts() ) : 
                while ( $posts->have_posts() ) :
                    $posts->the_post();
                    get_template_part('parts/card/card', 'skracenica'); 
                endwhile;    
                  
            ?>  
          </div>
        </div>
        <div class="row more-words the-next-btn mt-5">
            <?php echo previous_posts_link( '<i class="fas fa-arrow-left"></i> nazad', $posts->max_num_pages ); ?> 
            <?php echo next_posts_link( 'napred <i class="fas fa-arrow-right"></i>', $posts->max_num_pages ); ?> 
        </div>
        <?php
        endif;
        ?>
      </div>
      <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'blog'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>