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
          <?php

          $blog_post = new WP_Query( 
              array( 'cat' => 2,
                    'posts_per_page' => 1,
                  ));        
              if ( $blog_post->have_posts() ) : 
                while ( $blog_post->have_posts() ) :
                  $blog_post->the_post();
                  get_template_part('parts/blog/blog', 'first-post'); 
                endwhile;    
              endif;

          ?>
          <div class="divider"></div>
          <div class="other-posts row">
            <?php 
            
                $posts = new WP_Query( 
                  array( 'cat' => 2,
                    'posts_per_page' => 5,
                    'paged' => $paged
                  ));        
                  if ( $posts->have_posts() ) : 
                    $counter = 0;
                    while ( $posts->have_posts() ) :
                      $counter++;
                      $posts->the_post();
                      if($counter == 1) {}
                      else{
                        get_template_part('parts/blog/blog', 'post'); 
                      }
                    endwhile;    
                  endif;

            ?>  
          </div>
          <div class="row more-words the-next-btn mt-5 justify-content-right">
            <a href="/kategorija/blog/">Pogledaj sve <i class="fas fa-arrow-right"></i></a> 
          </div>
        </div>
      </div><!-- col-md-8 -->
      <div class="col-md-4">
      <?php get_template_part('parts/sidebar/sidebar', 'blog'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>