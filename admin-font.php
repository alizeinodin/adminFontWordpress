<?php
/*
Plugin Name: Admin Font
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: This plugin is free and will add a beautiful font to dashboard admin
Version: 1.0
Author: Ali Zeinodin
Author URI: https://github.com/alizeinodin
License: A "Slug" license name e.g. GPL2
*/
?>
        <style>
        /*@font-face {*/
        /*    font-family: IRANSans;*/
        /*    font-weight: normal;*/
        /*    src: url("*/<?php //echo plugins_url('adminFont').'/'; ?>/*fonts/eot/IRANSansWeb.eot") format("embedded-opentype"),*/
        /*    url("*/<?php //echo plugins_url('adminFont').'/'; ?>/*fonts/ttf/IRANSansWeb.ttf") format("truetype"),*/
        /*    url("*/<?php //echo plugins_url('adminFont').'/'; ?>/*fonts/woff/IRANSansWeb.woff") format("woff"),*/
        /*    url("*/<?php //echo plugins_url('adminFont').'/'; ?>/*fonts/woff2/IRANSansWeb.woff2") format("woff2");*/
        /*}*/
    </style>
<?php

function add_font_to_dashboard(){
    $languageOfSite = get_available_languages()[0]; // default languages of site
    if($languageOfSite == "fa_IR") {
        wp_enqueue_style('admin_styles', plugins_url('adminFont') . '/' . 'newFont.css');
    }
}
add_action('admin_enqueue_scripts', 'add_font_to_dashboard');
