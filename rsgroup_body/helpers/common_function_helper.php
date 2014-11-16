<?php

function readMore ($html, $limiter = 150) {
    $remove_html = strip_tags($html);
    $words = word_limiter($remove_html, $limiter);
    $length = strlen($words);
    $new_string = character_limiter($html, 0, $length);

    return html_purify($new_string);
}


?>