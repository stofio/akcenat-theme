<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <div class="duga-reklama">Reklama</div>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title">
          <h1>Arhiva Reči pod slovom <span class="letter">B</span></h1>
          <p>Strana 1 od 33</p>
          <div class="row justify-content-center">
            <div class="btn-page selected">1</div>
            <div class="btn-page">2</div>
            <div class="btn-page">3</div>
            <div class="btn-page selected">...</div>
            <div class="btn-page">33</div>
          </div>
        </div>
        <?php get_template_part('parts/list/list', 'words-letter'); ?>
      </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'page'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>