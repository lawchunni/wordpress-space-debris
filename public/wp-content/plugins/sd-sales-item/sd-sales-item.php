<?php
/**
 * Plugin Name: Space Debris Sales Item
 * Author: Jenny Chung
 * Description: Shortcode for adding sales item on Wordpress editor 
 * Version 1.0
 */

if(!function_exists('sd_sales_item_load_assets')) {
    function sd_sales_item_load_assets() {
        $style = plugin_dir_url(__FILE__) . 'assets/sd-sales-item.css';
        wp_enqueue_style('sd_sales_item', $style);
    }
    add_action('wp_enqueue_scripts', 'sd_sales_item_load_assets');
}

if(!function_exists('sd_sales_item')) {
    function sd_sales_item($atts, $content) {
        $title = $atts['title'];
        $price = $atts['price'];
        $image = $atts['image'];
        $out = <<<EOT
            <div class="sd_sales_item">
                <div class="sales_item left">
                    <a href="#">
                        <img src="../wp-content/uploads/{$image}" alt="{$title}" width="100" height="100" />
                    </a>
                </div>
                <div class="sales_item right">
                    <div class="title"><a href="#">{$title}</a></div>
                    <p>{$content}</p>
                    <div class="action">
                        <span class="price">{$price}</span>
                        <span class="btn"><a href="#">Details</a></span>
                    </div>
                </div>
            </div>
        EOT;
        return $out;
    }
    add_shortcode('sales_item', 'sd_sales_item');
}
