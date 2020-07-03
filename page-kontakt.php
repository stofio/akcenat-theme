<?php get_header(); ?>


<section class="container words-by-letter">
    <div class="row">
      <div class="col-lg-2 col-md-0">
        <?php get_template_part('parts/sidebar/sidebar', 'left'); ?>
      </div>
      <div class="col-lg-6 col-md-8">
        <div class="title">
          <h1>KONTAKTIRAJ NAS</h1>
        </div>
        <p>Ukoliko imate neko pitanje ili ste primetili neku grešku, možete nam pisati u bilo kom trenutku popunjavanjem sledeće forme, odgovorićemo vam na mejl sa zadovoljstvom.</p>
        <div class="box-words new-word">
          <h3>Napiši nam poruku</h3>
          <?php echo $response; ?>
          <form action="<?php the_permalink(); ?>" method="post">
            <h6>Ime</h6>
            <input type="text" id="name" name="contact_name">
            <h6>Email</h6>
            <input type="text" id="email" name="email">
            <h6>Poruka</h6>
            <textarea type="text" id="msg" name="msg"></textarea>
            <div class="row send-word">
              <input type="submit" class="red-btn" name="send_contact_msg" value="Pošalji">
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