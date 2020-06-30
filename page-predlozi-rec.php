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
          <?php echo $response; ?>
          <form action="<?php the_permalink(); ?>" method="post">
            <h6>Nova reč</h6>
            <input type="text" id="word" name="new_word">
            <h6>Šta znači?</h6>
            <textarea type="text" id="meaning" name="meaning"></textarea>
            <h6>Primer rečenice</h6>
            <textarea type="text" id="example" name="example"></textarea>
            <h3>O tebi (opciono)</h3>
            <h6>Tvoje ime</h6>
            <input type="text" id="word" name="opc_name">
            <h6>Odakle si?</h6>
            <input type="text" id="meaning" name="opc_location">
            <div class="row send-word">
              <input type="submit" class="red-btn" name="send_word" value="Pošalji">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'forms'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>