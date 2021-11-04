<?php

functioncustom_them_asset(){ wp_enqueue_style('style',get_stylesheet_uri()); }

add_action('wp_enqueue_scripts','custom_theme_assets');
