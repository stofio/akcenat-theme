<?php get_header(); ?>

<section class="container words-by-letter">
    <div class="row">
      <div class="col-md-8">
        <div class="title">
          <h1>BLOG <span style="text-transform: lowercase;"><span style="color: #0062cc;">AKCENAT</span>.COM</span>
          </h1>
          <h5>NAJNOVIJE</h5>
        </div>
        <div class="blog-posts">
          <div class="last-post text-center mt-5">
            <img src="" style="height: 350px; width: 100%; background-color: #e8e8e8;" />
            <h3>Post title</h3>
            <span>Jun 2020</span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
          <div class="divider"></div>
          <div class="other-posts row">
            <div class="col-md-6 text-center mt-3">
              <img src="" style="height: 150px; width: 100%; background-color: #e8e8e8;" />
              <h4>Post title</h4>
              <span>Jun 2020</span>
            </div>
            <div class="col-md-6 text-center mt-3">
              <img src="" style="height: 150px; width: 100%; background-color: #e8e8e8;" />
              <h4>Post title</h4>
              <span>Jun 2020</span>
            </div>
            <div class="col-md-6 text-center mt-3">
              <img src="" style="height: 150px; width: 100%; background-color: #e8e8e8;" />
              <h4>Post title</h4>
              <span>Jun 2020</span>
            </div>
            <div class="col-md-6 text-center mt-3">
              <img src="" style="height: 150px; width: 100%; background-color: #e8e8e8;" />
              <h4>Post title</h4>
              <span>Jun 2020</span>
            </div>
            <div class="col-md-6 text-center mt-3">
              <img src="" style="height: 150px; width: 100%; background-color: #e8e8e8;" />
              <h4>Post title</h4>
              <span>Jun 2020</span>
            </div>
            <div class="col-md-6 text-center mt-3">
              <img src="" style="height: 150px; width: 100%; background-color: #e8e8e8;" />
              <h4>Post title</h4>
              <span>Jun 2020</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'blog'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>