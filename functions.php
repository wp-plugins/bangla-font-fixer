<?php
/*
Plugin Name: Bangla Font Fixer
Plugin URI: http://bff.bhinno.net/
Description: বাংলা ফন্ট ভেঙে যাওয়ার সমস্যা থেকে পরিত্রাণ পান।
Author: Tasnimul Hasan Tauhid
Version: 1.1.1
Author URI: http://www.facebook.com/tht52
*/

//For custom font in wp_head and front page body

add_action('wp_head', 'bffbtht_wp_head_font');

function bffbtht_wp_head_font() {
  echo '<style>
    html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video, textarea, input, select {
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