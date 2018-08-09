<?php
/**
* Plugin Name: Stack Design Social Share
* Plugin URI:https://blog.stackprogramer.xyz/%d8%a7%d9%86%d8%aa%d8%b4%d8%a7%d8%b1-%d9%be%d9%84%d8%a7%da%af%db%8c%d9%86-%d9%88%d8%b1%d8%af%d9%be%d8%b1%d8%b3-%d8%af%da%a9%d9%85%d9%87-%d8%a7%d8%b4%d8%aa%d8%b1%d8%a7%da%a9-%da%af%d8%b0%d8%a7%d8%b4/
* Description: A plugin for persian and english social netowrk.
* Version: 1.4
* Author: stackprogramer
* Author URI: https://blog.stackprogramer.xyz/
* License: GPLV3
* Text Domain: StackDesignSocialShare
* Domain Path: /languages
*/
function social_share_menu_item()
{
  add_submenu_page("options-general.php", "Social Share", "Social Share", "manage_options", "social-share", "social_share_page"); 
}

add_action("admin_menu", "social_share_menu_item");

function social_share_page()
{
   ?>
      <div class="wrap">
         <h1>Social Sharing Options</h1>
 
         <form method="post" action="options.php">
            <?php
               settings_fields("social_share_config_section");
 
               do_settings_sections("social-share");
                
               submit_button(); 
            ?>
         </form>
      </div>
   <?php
}

require("setting.php");
require("socialbuttons.php");



