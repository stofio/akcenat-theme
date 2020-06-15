<div class="word-card">
    <a href="<?php the_permalink();?>">
        <h3><?php the_title(); ?></h3>
    </a>
    <div class="word-desc">
        <p style="color:darkgray"><?php the_field('potice_1'); ?></p>
        <p><b><?php the_field('znacenje_1'); ?></b></p>
        <span class="date"><?php the_field('datum_objavljivanja_1'); ?></span>
    </div>
</div>