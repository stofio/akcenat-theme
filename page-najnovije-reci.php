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
          <?php

          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $najnovije_reci = new WP_Query( array( 'cat' => get_cat_ID( 'reci' ), 'paged' => $paged ));
          
          ?>
          <p>Strana <?php echo $paged; ?> od <?php echo $najnovije_reci->max_num_pages; ?></p>
        </div>
        
        <?php
          if ( $najnovije_reci->have_posts() ) : 
          while ( $najnovije_reci->have_posts() ) : 
                $najnovije_reci->the_post();
                get_template_part( 'parts/card/card-page', get_post_format() );
          endwhile; 
        ?>
          <div class="row justify-content-center">
              <div class="pagination text-center mt-3">
                <?php 
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $najnovije_reci->max_num_pages,
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
                    ) )
                ?>
              </div>
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
