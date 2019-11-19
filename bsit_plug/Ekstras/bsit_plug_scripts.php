<?php

add_action('wp_enqueue_scripts', 'bsit_add_scripts');

function bsit_add_scripts()
{

wp_enqueue_style('bsit-main-style', plugins_url().'/bsit_plug/css/style.css');
wp_enqueue_script('bsit-main-script', plugins_url().'/bsit_plug/js/main.js');

wp_register_script('google', 'https://apis.google.com/js/platform.js');
wp_enqueue_script('google');
}

