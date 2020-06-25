<div class="col-md-6 text-center mt-3">
    <div class="post-img">
        <a href="<?php the_permalink(); ?>">
            <?php

            if(has_post_thumbnail()){
                the_post_thumbnail();
            }
            else {
                echo '<img style="height: 150px; width: 100%; background-color: #e8e8e8;" />';
            }

            ?>
        </a>
    </div>
    <h4 class="mt-2"><?php the_title(); ?></h4>
    <span><?php the_date(); ?></span>
</div>