<?php
/*
Plugin Name: form Post
Author: Dung Av
Description: Support create new Post Type
Author URI: https://google.com

*/

function wp_meta_box_form()
{
    add_meta_box('form', 'information form of post', 'form_output', 'movie');
}
add_action('add_meta_boxes', 'wp_meta_box_form');
function form_output($post)
{

    wp_nonce_field('save_information','information_nonce');

    $text_heading = get_post_meta($post->ID,'_text_heading',true);

    echo '<label for="text_heading">Text_heading : </label>';
    echo ' <input type="text" id="text_heading" name="text_heading" value="'.esc_attr($text_heading).'"/></br>';

    $text_description = get_post_meta($post->ID,'_text_description',true);
    
    echo '<label for="text_description">text_description : </label>';
    echo ' <input type="text" id="text_description" name="text_description" value="'.esc_attr($text_description).'"/></br>';
    
    $text_name = get_post_meta($post->ID,'_text_name',true);
    
    echo '<label for="text_name">text_name : </label>';
    echo ' <input type="text" id="text_name" name="text_name" value="'.esc_attr($text_name).'"/></br>';

    $text_wish = get_post_meta($post->ID,'_text_wish',true);
    
    echo '<label for="text_wish">text_wish : </label>';
    echo ' <input type="text" id="text_wish" name="text_wish" value="'.esc_attr($text_wish).'"/>';

}

function form_save($post_id)
{
    $information_nonce = $_POST['information_nonce'];
    
    if(!isset($information_nonce)){
        return;
    }
    if(!wp_verify_nonce($information_nonce,'save_information')){
        return;
    }

    $text_heading = sanitize_text_field($_POST['text_heading']);

    $text_description = sanitize_text_field($_POST['text_description']);

    $text_name = sanitize_text_field($_POST['text_name']);

    $text_wish = sanitize_text_field($_POST['text_wish']);

    update_post_meta($post_id,'_text_heading',$text_heading);
    update_post_meta($post_id,'_text_description',$text_description);
    update_post_meta($post_id,'_text_name',$text_name);
    update_post_meta($post_id,'_text_wish',$text_wish);
}   
add_action('save_post','form_save');