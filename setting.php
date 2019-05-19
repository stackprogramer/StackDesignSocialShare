<?php
function social_share_settings()
{
    add_settings_section("social_share_config_section", "", null, "social-share");

    add_settings_field("social-share-nofollow", "Do you want to not follow social links", "social_share_nofollow_checkbox", "social-share", "social_share_config_section"); 
    add_settings_field("social-share-cloob", "Do you want to display Cloob share button?", "social_share_cloob_checkbox", "social-share", "social_share_config_section"); 
   add_settings_field("social-share-facenama", "Do you want to display facenama share button?", "social_share_facenama_checkbox", "social-share", "social_share_config_section"); 
    add_settings_field("social-share-hammihan", "Do you want to display hammihan share button?", "social_share_hammihan_checkbox", "social-share", "social_share_config_section"); 
    add_settings_field("social-share-twitter", "Do you want to display Twitter share button?", "social_share_twitter_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-linkedin", "Do you want to display LinkedIn share button?", "social_share_linkedin_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-reddit", "Do you want to display Reddit share button?", "social_share_reddit_checkbox", "social-share", "social_share_config_section");
    add_settings_field("social-share-facebook", "Do you want to display Facebook share button?", "social_share_facebook_checkbox", "social-share", "social_share_config_section");

    register_setting("social_share_config_section", "social-share-nofollow");
    register_setting("social_share_config_section", "social-share-cloob");
    register_setting("social_share_config_section", "social-share-facenama");
    register_setting("social_share_config_section", "social-share-hammihan");
    register_setting("social_share_config_section", "social-share-twitter");
    register_setting("social_share_config_section", "social-share-linkedin");
    register_setting("social_share_config_section", "social-share-reddit");
    register_setting("social_share_config_section", "social-share-facebook");

}
 
function social_share_nofollow_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-nofollow" value="1" <?php checked(1, get_option('social-share-nofollow'), true); ?> /> Check for Yes
   <?php
}

function social_share_cloob_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-cloob" value="1" <?php checked(1, get_option('social-share-cloob'), true); ?> /> Check for Yes
   <?php
}

function social_share_facenama_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-facenama" value="1" <?php checked(1, get_option('social-share-facenama'), true); ?> /> Check for Yes
   <?php
}

function social_share_hammihan_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-hammihan" value="1" <?php checked(1, get_option('social-share-hammihan'), true); ?> /> Check for Yes
   <?php
}


function social_share_twitter_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-twitter" value="1" <?php checked(1, get_option('social-share-twitter'), true); ?> /> Check for Yes
   <?php
}

function social_share_linkedin_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-linkedin" value="1" <?php checked(1, get_option('social-share-linkedin'), true); ?> /> Check for Yes
   <?php
}

function social_share_reddit_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-reddit" value="1" <?php checked(1, get_option('social-share-reddit'), true); ?> /> Check for Yes
   <?php
}
 
function social_share_facebook_checkbox()
{  
   ?>
        <input type="checkbox" name="social-share-facebook" value="1" <?php checked(1, get_option('social-share-facebook'), true); ?> /> Check for Yes
   <?php
}

add_action("admin_init", "social_share_settings");