<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
      <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title">
          <h1>DODAJTE NOVU REČ NA <span style="text-transform: lowercase;"><span style="color: #0062cc;">AKCENAT</span>.COM</span>
          </h1>
        </div>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        <div class="box-words new-word">
          <h3>Dodaj novu reč ovde</h3>
          <h6>Nova reč</h6>
          <input type="text" id="word">
          <h6>Šta znači?</h6>
          <textarea type="text" id="meaning"></textarea>
          <h6>Primer rečenice</h6>
          <textarea type="text" id="example"></textarea>
          <h3>O tebi (opciono)</h3>
          <h6>Tvoje ime</h6>
          <input type="text" id="word">
          <h6>Odakle si?</h6>
          <input type="text" id="meaning">
          <div class="row send-word">
            <a class="red-btn">Pošalji</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'forms'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>