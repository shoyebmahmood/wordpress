<?php
function shoyeb_bootstrapping(){
    load_theme_textdomain("shoyeb");
    add_theme_support("title-tag");
    add_theme_support("post_thumbnails");

}
add_action("after_setup_theme","shoyeb_bootstrapping");
function shoyeb_assets(){
    wp_enqueue_style("shoyeb",get_stylesheet_uri());
    wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts","shoyeb_assets");





















?>
