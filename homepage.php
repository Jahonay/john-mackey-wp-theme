<?php
function get_home_parts()
{
    $post = get_post(get_the_ID());

    echo $post->post_content;
}
