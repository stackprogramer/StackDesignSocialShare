<?php
function add_social_share_icons($content)
{
    $html = "<div class='social-share-wrapper'><div class='share-on'>Share on: </div>";

    global $post;

    $url = get_permalink($post->ID);
    $url = esc_url($url);


     if(get_option("social-share-cloob") == 1)
    {
        $html = $html . "<div class='cloob'><a target='_blank' href='http://www.cloob.com/share/link/add?url=" . $url . "'>Cloob</a></div>";
    }


     if(get_option("social-share-facenama") == 1)
    {
        $html = $html . "<div class='facenama'><a target='_blank' href='http://facenama.com/links/?url=" . $url . "'>Facenama</a></div>";
    }

    if(get_option("social-share-hammihan") == 1)
    {
        $html = $html . "<div class='hammihan'><a target='_blank' href='http://facenama.com/links/?url=" . $url . "'>Hammihan</a></div>";
    }

   
    if(get_option("social-share-twitter") == 1)
    {
        $html = $html . "<div class='twitter'><a target='_blank' href='https://twitter.com/share?url=" . $url . "'>Twitter</a></div>";
    }

    if(get_option("social-share-linkedin") == 1)
    {
        $html = $html . "<div class='linkedin'><a target='_blank' href='http://www.linkedin.com/shareArticle?url=" . $url . "'>LinkedIn</a></div>";
    }

    if(get_option("social-share-reddit") == 1)
    {
        $html = $html . "<div class='reddit'><a target='_blank' href='http://reddit.com/submit?url=" . $url . "'>Reddit</a></div>";
    }

     if(get_option("social-share-facebook") == 1)
    {
        $html = $html . "<div class='facebook'><a target='_blank' href='http://www.facebook.com/sharer.php?u=" . $url . "'>Facebook</a></div>";
    }


    $html = $html . "<br><br><div class='clear'></div></div>";

    return $content = $content . $html;
}

add_filter("the_content", "add_social_share_icons");
function social_share_style() 
{
    wp_register_style("social-share-style-file", plugin_dir_url(__FILE__) . "style.css");
    wp_enqueue_style("social-share-style-file");
}

add_action("wp_enqueue_scripts", "social_share_style");