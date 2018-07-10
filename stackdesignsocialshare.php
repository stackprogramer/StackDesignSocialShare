<?php
/**
* Plugin Name: Stack Design Social Share
* Plugin URI: https://blog.stackprogramer.xyz/
* Description: A plugin for persian and english social netowrk.
* Version: 1.1 
* Author: stackprogramer
* Author URI: https://blog.stackprogramer.xyz/
* License: GPLV3
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



