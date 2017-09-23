<?php 

function get_ach($atts) {
   $ach = include 'ach.php';
}

add_shortcode('ach', 'get_ach');
?>