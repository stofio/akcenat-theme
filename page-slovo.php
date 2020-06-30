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
          <h1>Reči pod slovom <span class="letter"><?php echo $shownLetter ?></span></h1>
          <h5>SRPSKI REČNIK</h5>
          <p>U nastavku su neke reči na srpskom jeziku pod slovom B</p>
        </div>

        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $reci_slova = new WP_Query( 
             array( 'cat' => 1,
                    'starts_with' => $letter,
                    'paged' => $paged,
                    'orderby' => 'title',
                    'order'   => 'ASC', )
                  ); 
          if ( $reci_slova->have_posts() ) : 
            while ( $reci_slova->have_posts() ) : 
              $reci_slova->the_post();
              
               get_template_part('parts/card/card', 'page');

          endwhile;  
          endif; 
        ?>

        <div class="row more-words">
          <a href="/arhiva-reci-slova/" class="red-btn">Pogledaj još <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>