<?php
/*
 * Plugin Name: Dappin Plus Complementos
 * Description: Añade codigos especiales para dappin 
 * Version: 1.0.0
 * Author: Yisus_Develop
 * Author URI: https://enlaweb.co/
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: Plugin para Dappin de Yisus_Develop
*/


if (!defined('ABSPATH')) {
  exit;
}

if (!defined('DPC_PLUGIN_URL')) {
  define('DPC_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('DPC_NS')) {
  define('DPC_NS', 'Dappin_Plus_Complemento');
}

// Include settings 
include 'includes/wp_settings_page.php';

// Include taxonomy

include 'includes/taxonomies/wp_categorydpc_taxonomy.php';


// Include enqueue scripts functions
include 'includes/wp_enqueue_scripts.php';
