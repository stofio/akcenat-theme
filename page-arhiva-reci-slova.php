<?php get_header(); ?>

<?php
$letter = $_GET['slovo'];

if(strlen($letter) > 1 || !ctype_alpha($letter) ) {
  echo '<script type="text/javascript">window.location = "/404"</script>';
} 

if($letter == 'c') {
  $shownLetter = 'CČĆ';
}
else if($letter == 'd') {
  $shownLetter = 'DĐ';
}
else if($letter == 's') {
  $shownLetter = 'SŠ';
}
else if($letter == 'z') {
  $shownLetter = 'ZŽ';
}
else { $shownLetter = $letter; }  

?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title">
          <h1>Arhiva reči pod slovom <span style="color:#0062cc"><?php echo $shownLetter ?></span></h1>
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $reci_slova = new WP_Query( 
             array( 'cat' => 1,
                    'starts_with' => $letter,
                    'paged' => $paged,
                    'posts_per_page' => 30,
                    'orderby' => 'title',
                    'order'   => 'ASC', )
                  ); 
          if ( $reci_slova->have_posts() ) : 
          ?>
          <p>Strana <?php echo $paged; ?> od <?php echo $reci_slova->max_num_pages; ?></p>
          <div class="row justify-content-center">
            <div class="pagination">
              <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $reci_slova->max_num_pages,
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
        </div>
        <div class="box-words">
          <div class="row">
            <div class="col-md-12">
              <ul>
              <?php
                    while ( $reci_slova->have_posts() ) : 
                        $reci_slova->the_post();
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
      </div> <!-- end col-lg-6 col-md-8 -->
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>