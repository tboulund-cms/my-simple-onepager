<?php
function mytheme_enqueue_style() {
    wp_enqueue_style("my-style", get_stylesheet_uri()); 
}
add_action("wp_enqueue_scripts", "mytheme_enqueue_style");
?>