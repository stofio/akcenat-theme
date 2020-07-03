<?php get_header(); ?>

<?php

$catreci = get_category(get_cat_ID( 'reci' ));
$uk_reci = $catreci->category_count;

$catskracenice = get_category(get_cat_ID( 'skracenice' ));
$uk_skracenice = $catskracenice->category_count;

?>

<div class="container home-logo">
    <div class="row">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo akcenat.png" width="200">
    </div>
  </div>

  <div class="container home-welcome">
    <div class="row">
      <div class="intro">
        <h1>Veliki srpski recnik manje poznatih reci i izraza</h1>
        <p>Veliki broj reči preuzetih iz stranih jezika u poslednje vreme, posebno onih iz engleskog
        (preko zabavne muzike, sporta, filma, politike, marketinga, kozmetike, turizma, kompjuterske tehnike itd.), ali i onih 
        koje su ranije prihvaćene, adaptirane i uključene u leksikon srpskog standardnog jezika, a kojima značenja
        nisu jasna, ili nisu dovoljno jasna, prosečnom obrazovanom izvornom govorniku, ili pak korisniku našeg jezika
        , diktiraju potrebu da se sve takve reči sakupe, popišu,opišu i akcentuju, te da im se utvrdi dalje i bliže poreklo
        (etimologija) i značenje, odnosno značenja.
        </p>
        <h2 class="mb-3">Ukupno na akcenat.com</h2>
        <div class="row">
          <div class="col-md-6">
            <h3>Reči: <?php echo $uk_reci; ?></h3>
          </div>
          <div class="col-md-6">
            <h3>Skraćenice: <?php echo $uk_skracenice; ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>


 <?php get_template_part('parts/section/section', 'by-letters'); ?>

  <div class="container">
    <div class="square-ad" style="display:none">Reklama</div>
  </div>

  <?php get_template_part('parts/section/section', 'blog'); ?>

<?php get_footer(); ?>