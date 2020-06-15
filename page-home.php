<?php get_header(); ?>

<div class="container home-logo">
    <div class="row">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo akcenat.png" width="200">
    </div>
  </div>

  <div class="container home-welcome">
    <div class="row">
      <div class="intro">
        <h1>Veliki srpski recnik manje poznatih reci i izraza</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
          here, content here', making it look like readable English.</p>
      </div>
    </div>
  </div>


 <?php get_template_part('parts/section/section', 'by-letters'); ?>

  <div class="container">
    <div class="square-ad">Reklama</div>
  </div>

  <?php get_template_part('parts/section/section', 'blog'); ?>

<?php get_footer(); ?>