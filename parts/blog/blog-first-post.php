<div class="last-post text-center mt-5">
    <div class="first-post-img">
        <a href="<?php the_permalink(); ?>">
            <?php

            if(has_post_thumbnail()){
                the_post_thumbnail();
            }
            else {
                echo '<img style="height: 350px; width: 100%; background-color: #e8e8e8;" />';
            }

            ?>
        </a>
    </div>
    <a href="<?php the_permalink(); ?>">
        <h3 class="mt-3"><?php the_title(); ?></h3>
    </a>
    <span><?php the_date(); ?></span>
    <p><?php the_excerpt(); ?></p>
</div>