<?php

$page_url = get_permalink($post->ID );
$title = $post->post_title;

?>

<div class="side-btns">
    <div class="share-btns d-flex">
        <p>Podeli ovaj članak</p>
        <div>
            <a href=’http://www.facebook.com/share.php?u=<?php print(urlencode($page_url)); ?>&title=<?php print(urlencode($title)); ?>’ target=’_blank’>
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href=’http://twitter.com/home?status=<?php print(urlencode($title)); ?>+<?php print(urlencode($page_url)); ?>’ target=’_blank’>
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </div>
    <a href="/kategorija/reci/" class="long-red-btn row">Listaj rečnik akcenat.com <i class="fas fa-arrow-right"></i></a>
    <div class="square-ad" style="display:none">Reklama</div>
</div>