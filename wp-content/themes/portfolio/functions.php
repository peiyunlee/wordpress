<?php

function portfolio_register_styles(){
    wp_enqueue_style('portfolio_register_styles',get_template_directory_uri(),"/style.css",array().'1.0','all');

}

add_action('wp_wnqueue_scripts','portfolio_register_styles')

?>