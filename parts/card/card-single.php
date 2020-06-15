<div style="display:flex">
    <div class="meaning-num">1</div>
    <div class="word-card">
        <div class="word-desc">
        <p class="word-potice"><?php the_field('potice_1'); ?></p>
        <p><b><?php the_field('znacenje_1'); ?></b></p>
        <p><?php the_field('primer_1'); ?></p>
        <span class="date"><?php the_field('datum_objavljivanja_1'); ?></span>
        </div>
    </div>
</div>

<?php 

if( trim(get_field('znacenje_2')) !== '' ) {
    ?>
    <div style="display:flex">
        <div class="meaning-num">2</div>
        <div class="word-card">
            <div class="word-desc">
            <p class="word-potice"><?php the_field('potice_2'); ?></p>
            <p><b><?php the_field('znacenje_2'); ?></b></p>
            <p><?php the_field('primer_2'); ?></p>
            <span class="date"><?php the_field('datum_objavljivanja_2'); ?></span>
        </div>
        </div>
    </div>

<?php } ?>

<?php 

if( trim(get_field('znacenje_3')) !== '' ) {
    ?>
    <div style="display:flex">
        <div class="meaning-num">3</div>
        <div class="word-card">
            <div class="word-desc">
            <p class="word-potice"><?php the_field('potice_3'); ?></p>
            <p><b><?php the_field('znacenje_3'); ?></b></p>
            <p><?php the_field('primer_3'); ?></p>
            <span class="date"><?php the_field('datum_objavljivanja_3'); ?></span>
        </div>
        </div>
    </div>

<?php } ?>

<?php 

if( trim(get_field('znacenje_4')) !== '' ) {
    ?>
    <div style="display:flex">
        <div class="meaning-num">4</div>
        <div class="word-card">
            <div class="word-desc">
            <p class="word-potice"><?php the_field('potice_4'); ?></p>
            <p><b><?php the_field('znacenje_4'); ?></b></p>
            <p><?php the_field('primer_4'); ?></p>
            <span class="date"><?php the_field('datum_objavljivanja_4'); ?></span>
        </div>
        </div>
    </div>

<?php } ?>

<?php 

if( trim(get_field('znacenje_5')) !== '' ) {
    ?>
    <div style="display:flex">
        <div class="meaning-num">5</div>
        <div class="word-card">
            <div class="word-desc">
            <p class="word-potice"><?php the_field('potice_5'); ?></p>
            <p><b><?php the_field('znacenje_5'); ?></b></p>
            <p><?php the_field('primer_5'); ?></p>
            <span class="date"><?php the_field('datum_objavljivanja_5'); ?></span>
        </div>
        </div>
    </div>

<?php } ?>