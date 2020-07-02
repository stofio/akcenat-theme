<div class="container blog-section">
  <h2>BLOG</h2>
  <div class="row blog-container">
    <div class="col-md-6">
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
    </div>
    <div class="col-md-3">
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
              get_template_part('parts/blog/blog', 'post-section'); 
            }
          endwhile;    
        endif;

    ?>  
    </div>
  </div>
  <div class="text-center row">
    <a href="/kategorija/blog/" class="red-btn">Pogledaj još</a>
  </div>
</div>