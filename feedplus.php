<?php
/*
Plugin Name: Feed Plus
Plugin URI: http://www.annu.biz/
Description: Mit Feed Plus bist du in der Lage Werbung, Infos und andere wichtige Dinge direkt im Feed zu publizieren. Die Administration finden sie unter <a href="options-general.php?page=FP">Feed Plus</a>
Version: 1.0.1
License: Good news, this plugin is free for everyone! Since it's released under the GPL, you can use it free of charge on your personal. If you will using this Plugin on a commercial blog - its also free of charge but please send me an email (plugins@annu.biz) and inform me.
Author: Eric-Oliver M&auml;chler
Author URI: http://www.annu.biz
Min WP Version: 2.7
*/

include 'conf.php';

$before = get_option('before');
$behind = get_option('behind');

add_filter('the_content', 'add_messages');

function add_messages( $content ) {
        global $before;
        global $behind;
     if( is_feed() ) {
        return $before.$content.$behind;
          } else {
        return $content;
    }
}
?>