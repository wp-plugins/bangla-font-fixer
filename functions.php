<?php
/*
Plugin Name: Bangla Font Fixer
Plugin URI: http://bff.bhinno.net/
Description: বাংলা ফন্ট ভেঙে যাওয়ার সমস্যা থেকে পরিত্রাণ পান।
Author: Tasnimul Hasan Tauhid
Version: 1.0.1
Author URI: http://www.facebook.com/tht52
*/

//For custom font in wp_head and front page body

add_action('wp_head', 'bffbtht_wp_head_font');

function bffbtht_wp_head_font() {
  echo '<style>
    body, td, textarea, input, select {
      font-family: "SolaimanLipi", Vrinda;
    } 
#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
      font-family: "SolaimanLipi", Vrinda;
    } 
  </style>';
}

//For custom font in wp_admin

add_action('admin_head', 'bffbtht_admin_font');

function bffbtht_admin_font() {
  echo '<style>
    body, td, textarea, input, select {
      font-family: "SolaimanLipi", Vrinda;
    } 
#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
      font-family: "SolaimanLipi", Vrinda;
    } 
  </style>';
}

//For custom font in login page

add_action('login_head', 'bffbtht_login_font');

function bffbtht_login_font() {
  echo '<style>
p {font-family: "SolaimanLipi", Vrinda;} 
  </style>';
}