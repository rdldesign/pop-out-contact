<?php
/*
Plugin Name: CFX pop-out contact form
Plugin URI: https://www.cocoonfxmedia.co.uk
Description: A pop-out contact form
Author: CocoonfxMedia
Author URI: https://www.cocoonfxmedia.co.uk
Text Domain: cfx-pop-out-form
Domain Path: /languages/
Version: 1.0
*/

function cfx_popout_generate_button () {
  ?>
  <a href="#" class="cfx-pop-out-form-button"><span class="button-text">Get in touch</span></a>
  <?php
}

//load styles
function cfx_popout_load_plugin_css() {
  $plugin_url = plugin_dir_url( __FILE__ );
  wp_enqueue_style( 'style1', $plugin_url . 'css/style.css' );
}

//load jQuery
function cfx_popout_load_jquery() {
  $plugin_url = plugin_dir_url( __FILE__ );
  wp_enqueue_script('jquery');
  wp_enqueue_script('cfx-pop-out', $plugin_url . 'js/cfx-pop-out-form.js' );
}

function cfx_popout_widget()
{
  echo "hello world!";
}

//create widget to store contact form shortcode
function cfx_popout_Init() {
  //register widget
  register_sidebar(array(
      'name' => 'CFX pop-out form',
      'id' => 'cfx-footer-popout',
      'description' => 'Use a text widget to add a shortcode to your form below.
</div>',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ));

}


add_action('init', 'cfx_popout_Init');

/*add button HTML to footer*/
add_filter('wp_footer', 'cfx_popout_generate_button');

/*load scripts*/
add_action('wp_enqueue_scripts', 'cfx_popout_load_plugin_css');
add_action( 'wp_enqueue_scripts', 'cfx_popout_load_jquery' );


?>
