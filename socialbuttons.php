<?php
function add_social_share_icons($content)
{
    $html = "<div class='social-share-wrapper'><div class='share-on' >".__('Share on:','StackDesignSocialShare')." </div>";

    global $post;

    $url = get_permalink($post->ID);
    $url = esc_url($url);


     if(get_option("social-share-cloob") == 1)
    {
        $html = $html . "<div class='cloob'><a target='_blank' href='http://www.cloob.com/share/link/add?url=" . $url . "'><img   title='".__('Cloob','StackDesignSocialShare')."' class='click-icons' alt='".__('Cloob:','StackDesignSocialShare')."' src='".plugins_url('img/cloob.png', __FILE__)."' ></a></div>";
    }


     if(get_option("social-share-facenama") == 1)
    {
        $html = $html . "<div class='facenama'><a target='_blank' href='http://facenama.com/links/?url=" . $url . "'><img   title='".__('Facenama','StackDesignSocialShare')."' class='click-icons' alt='".__('Facenama:','StackDesignSocialShare')."' src='".plugins_url('img/facenama.png', __FILE__)."' ></a></div>";

    }

    if(get_option("social-share-hammihan") == 1)
    {
        $html = $html . "<div class='hammihan'><a target='_blank' href='http://hammihan.com/links/?url=" . $url . "'><img   title='".__('Hammihan','StackDesignSocialShare')."' class='click-icons' alt='".__('Hammihan:','StackDesignSocialShare')."' src='".plugins_url('img/hammihan.png', __FILE__)."' ></a></div>";
       
    }

   
    if(get_option("social-share-twitter") == 1)
    {
         $html = $html . "<div class='twitter'><a target='_blank' href='https://twitter.com/share?url=" . $url . "'><img   title='".__('Twitter','StackDesignSocialShare')."' class='click-icons' alt='".__('Twitter:','StackDesignSocialShare')."' src='".plugins_url('img/twitter.png', __FILE__)."' ></a></div>";

    }

    if(get_option("social-share-linkedin") == 1)
    {
        $html = $html . "<div class='linkedin'><a target='_blank' href='http://www.linkedin.com/shareArticle?url=" . $url . "'><img   title='".__('Linkedin','StackDesignSocialShare')."' class='click-icons' alt='".__('Linkedin:','StackDesignSocialShare')."' src='".plugins_url('img/linkedin.png', __FILE__)."' ></a></div>";
       
    }

    if(get_option("social-share-reddit") == 1)
    {
       
        $html = $html . "<div class='reddit'><a target='_blank' href='https://reddit.com/submit?url=" . $url . "'><img   title='".__('Reddit','StackDesignSocialShare')."' class='click-icons' alt='".__('Reddit:','StackDesignSocialShare')."' src='".plugins_url('img/reddit.png', __FILE__)."' ></a></div>";
        
    }

     if(get_option("social-share-facebook") == 1)
    {
       
        
        $html = $html . "<div class='facebook'><a target='_blank' href='http://www.facebook.com/sharer.php?u=" . $url . "'><img   title='".__('Facebook','StackDesignSocialShare')."' class='click-icons' alt='".__('Facebook:','StackDesignSocialShare')."' src='".plugins_url('img/facebook.png', __FILE__)."' ></a></div>";
       
    }


    $html = $html . "<br><br><div class='clear'></div></div>";

    return $content = $content . $html;
}

add_filter("the_content", "add_social_share_icons");
function social_share_style() 
{
        if ( is_rtl() ) {
            wp_register_style("social-share-style-file", plugin_dir_url(__FILE__) . "style-rtl.css");
            wp_enqueue_style("social-share-style-file");
        }else{
            wp_register_style("social-share-style-file", plugin_dir_url(__FILE__) . "style.css");
            wp_enqueue_style("social-share-style-file");
        }

}

add_action("wp_enqueue_scripts", "social_share_style");


// for plugin translation
function StackDesignSocialShare_load_textdomain() {
        load_plugin_textdomain( 'StackDesignSocialShare', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'StackDesignSocialShare_load_textdomain' );
