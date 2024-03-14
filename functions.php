<?php

function flow_session_files()
{
  wp_enqueue_script('sweetalert2', get_theme_file_uri('js/sweetalert2/sweetalert2.all.min.js'), [], '1.0', false);
  wp_enqueue_script('toast', get_theme_file_uri('js/toast.js'), [], '1.0', false);
  
  wp_enqueue_script('slim-min', "https://code.jquery.com/jquery-3.2.1.slim.min.js", [], '1.0', true);
  wp_enqueue_script('pooper-min', "https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js", [], '1.0', true);
  wp_enqueue_script('boostrap-min', "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js", [], '1.0', true);

  wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/365b7ed373.js');
  wp_enqueue_style('bootstrap-styles', "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css");
  wp_enqueue_style('main-styles', get_theme_file_uri('/css/style.css'));
  wp_enqueue_style('responsive-styles', get_theme_file_uri('/css/responsive.style.css'));



  wp_localize_script(
    'main-js',
    'flowData',
    array(
      'root_url' => get_site_url(),
      'nonce' => wp_create_nonce('wp_rest'),
      'ajaxurl' => admin_url('admin-ajax.php'),
      'fileUrl' => get_theme_file_uri()
    )
  );
}

add_action('wp_enqueue_scripts', 'flow_session_files');


function hide_admin_bar()
{
  show_admin_bar(false);
}

add_action('after_setup_theme', 'hide_admin_bar');