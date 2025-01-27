<?php

/**
 * Plugin Name: My Plugin
 * Description: This is description
 * Version: 1.1
 * Author: hifza
 * Author URI: #
 */

if (!defined('ABSPATH')) {
    die("Location: /my-plugin");
}

// Function for plugin activation
function my_plugin_activation() {
    global $wpdb,$table_prefix;
    $wp_emp = $table_prefix. 'emp';
    $q="CREATE TABLE IF NOT EXISTS `$wp_emp` (`ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `status` BOOLEAN NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
$wpdb->query($q);
// $q= "INSERT INTO `$wp_emp` (`name`, `email`, `status`) VALUES ('hifza', 'hiffi@gmail.com', '1');" ;
// $wpdb->query($q);
$data = array(
    'name' =>'hira',
    'email'=>'123@gmail.com',
    'status'=>1
);
$wpdb->insert($wp_emp,$data);

    // Code to execute on plugin activation
}
register_activation_hook(__FILE__, 'my_plugin_activation');

// Function for plugin deactivation
function my_plugin_deactivation() {
    global $wpdb,$table_prefix;
    $wp_emp=$table_prefix .'emp';
    $q= "DROP TABLE `$wp_emp`";
    $wpdb->query($q);
    // Code to execute on plugin deactivation
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivation');

// Function for the shortcode
function my_sc_fun() {
    // Code for the shortcode
    return 'Function call';
}
add_shortcode('my-sc', 'my_sc_fun');

// Debug output (optional)

