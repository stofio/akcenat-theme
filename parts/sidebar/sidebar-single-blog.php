<?php

$page_url = get_permalink($post->ID );
$title = $post->post_title;

?>

<div class="side-btns">
    <div class="share-btns d-flex">
        <p>Podeli ovaj članak</p>
        <div>
            <a href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a title="Podeli na Twitter" href="http://twitter.com/intent/tweet?text=Čitati: <?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
            </a> 
        </div>
    </div>
    <a href="/kategorija/reci/" class="long-red-btn row">Listaj rečnik akcenat.com <i class="fas fa-arrow-right"></i></a>
    <div class="square-ad" style="display:none">Reklama</div>
</div>