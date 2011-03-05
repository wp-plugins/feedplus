<?php
/*
Plugin Name: Feed Plus
Plugin URI: http://www.annu.biz/
Description: Mit Feed Plus bist du in der Lage Werbung, Infos und andere wichtige Dinge direkt im Feed zu publizieren. Die Administration finden sie unter <a href="options-general.php?page=FP">Feed Plus</a>
Version: 1.0
License: Die Benützung des Feed Plus Plugins ist für private Blogs kostenlos. Wenn man das Plugin auf einer Geschäftlichen Webseite benützen möchte, kann man das ebenfalls kostenlos tun, bitte schickt mir dann einfach eine eMail (plugins@annu.biz) und informiert mich darüber.
Author: Eric-Oliver M&auml;chler
Author URI: http://www.annu.biz
Min WP Version: 2.7
*/

include '../conf.php';

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