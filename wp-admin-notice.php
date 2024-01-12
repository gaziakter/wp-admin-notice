<?php
/**
 * Plugin Name:       WP Admin Notice
 * Plugin URI:        https://classysystem.com/plugin/wp-column/
 * Description:       WordPress admin notice management
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://classysystem.com/
 * Text Domain:       admin-notice
 * Domain Path:       /languages
 */

 function wpan_admin_notices(){
    ?>
    <div id="noticedismiss" class="notice notice-warning is-dismissible"> 
        <p>Hey! This is notice</p>
    </div>
    <?php
 }
 add_action( 'admin_notices', 'wpan_admin_notices');


 function wpan_script_function(){
    wp_enqueue_script( 'wpam_script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array('jquery'), '1.0' );
 }
 add_action('admin_enqueue_scripts', 'wpan_script_function');