<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <div class="duga-reklama">Reklama</div>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title"> 
          <h1>Reči pod slovom <span class="letter">B</span></h1>
          <h5>SRPSKI REČNIK</h5>
          <p>U nastavku su reči u srpskom jeziku redom po abecedi</p>
        </div>
        <?php get_template_part('parts/card/card', 'page'); ?>
        <?php get_template_part('parts/card/card', 'page'); ?>
        <?php get_template_part('parts/card/card', 'page'); ?>
        
        <div class="row more-words">
          <a class="red-btn">Pogledaj još <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>