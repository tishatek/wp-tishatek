<?php

include "constants.php";
include "app/autoloader.php";

add_action('after_setup_theme','initializer::setup');

add_action('init','PostTypes::make_product_post_type');

add_action('add_meta_boxes','MetaBoxes::register_product_price_meta_box');

//add_filter('show_admin_bar','__return_false');

