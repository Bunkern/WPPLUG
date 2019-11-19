<?php
/*
Plugin Name:  BSIT Plug
Description:  We got this 
Version:      1.0.0
Author:       BSIT
Text Domain:  BSIT Plug
 */

defined('ABSPATH') or die('Ohhhh No you Dont');

require_once(plugin_dir_path(__FILE__).'/Ekstras/bsit_plug_scripts.php');
require_once(plugin_dir_path(__FILE__).'/bsit-class/bsit-class.php');

function register_bsit_widget()
{
register_widget('BSIT_widget');
}

add_action('widgets_init', 'register_bsit_widget');