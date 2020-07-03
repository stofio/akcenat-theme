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
          <?php
          
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $skracenice = new WP_Query( 
            array( 'cat' => get_cat_ID( 'skracenice' ),
            'paged' => $paged
            )); 
          
          ?>
          <p>Strana <?php echo $paged; ?> od <?php echo $skracenice->max_num_pages; ?></p>
        </div>
        <div class="blog-posts mt-4">
          <div class="other-posts">
            <?php 
       
                if ( $skracenice->have_posts() ) : 
                while ( $skracenice->have_posts() ) :
                    $skracenice->the_post();
                    get_template_part('parts/card/card', 'skracenica'); 
                endwhile;    
                  
            ?>  
          </div>
        </div>
        <div class="row justify-content-center">
            <div class="pagination text-center mt-3">
              <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $skracenice->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => '?paged=%#%',
                      'show_all'     => false,
                      'type'         => 'plain',
                      'end_size'     => 1,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      'prev_text'    => sprintf( '<i></i> %1$s', __( '', 'text-domain' ) ),
                      'next_text'    => sprintf( '%1$s <i></i>', __( '', 'text-domain' ) ),
                      'add_args'     => false,
                      'add_fragment' => '',
                  ) );
              ?>
            </div>
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