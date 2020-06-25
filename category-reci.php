<?php get_header(); ?>

<section class="container words-by-letter">   
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <div class="duga-reklama">Reklama</div>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title">
          <h1>Istraži sve reči na <span style="text-transform:lowercase"><span style="color:#0062cc">akcenat</span>.com</></h1>
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $sve_reci = new WP_Query( 
             array( 'cat' => 1,
                    'posts_per_page' => 30,
                    'paged' => $paged,
                    'orderby' => 'title',
                    'order'   => 'ASC', ));        
          if ( $sve_reci->have_posts() ) : 
          ?>
          <p>Strana <?php echo $paged; ?> od <?php echo $sve_reci->max_num_pages; ?></p>
          <div class="row justify-content-center">
            <div class="pagination">
              <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $sve_reci->max_num_pages,
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
        </div>
        <div class="box-words">
          <div class="row">
            <div class="col-md-12">
              <ul>
              <?php
                    while ( $sve_reci->have_posts() ) : 
                        $sve_reci->the_post();
                        ?>
                        <a href="<?php echo the_permalink()?>"><li><?php echo the_title()?></li></a>
                        <?php
                    endwhile;  
                endif; 
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>