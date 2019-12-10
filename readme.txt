=== CFX POP OUT CONTACT FORM (1.0) ===

Adds a pop-out contact form to all pages on Wordpress site. Requires Contact Form 7.


=== HOW TO USE IT ===

1) Install and activate plugin
2) Grab shortcode for a form from Contact Form 7
3) Go to Appearance>Widgets
4) Add text widget to CFX pop-out form Widget area
5) Add following into text area of widget (leave title field empty):

<div class="cfx-pop-out-form hidden">
  [form shortcode]
</div>

6) Add the following to the theme footer:

if ( is_active_sidebar( 'cfx-footer-popout' ) ) : //check the sidebar if used.
dynamic_sidebar( 'cfx-footer-popout' );  // show the sidebar.
endif;

=== IMPROVEMENTS ===

- Check whether Contact Form 7 is installed and display message if not in admin
