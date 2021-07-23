<?php

/*
Template Name: Joie Stroller Finder
*/

get_header();

$joie_banner_url = get_field('banner_image');
$joie_page_title = get_field('page_title');
$joie_page_subtitle = get_field('page_subtitle');
$joie_search_rest_url = get_site_url() . '/wp-json/joie/v1/stroller/products';
$joie_page_description = get_field('page_description');
$joie_category_rest_url =  get_site_url() . '/wp-json/joie/v1/stroller/category';
$joie_settings_rest_url = get_site_url() .  '/wp-json/joie/v1/stroller/settings';
$joie_under_banner_title = get_field('under_banner_title');
$joie_please_wait_message = get_field('wait_message');
$joie_start_new_search_text = get_field('start_new_search_text');
$joie_under_banner_subtitle = get_field('under_banner_subtitle');

/**
 * Assets URL
 */

$main_js_url = get_template_directory_uri() . "/modules/stroller-finder/assets/index.1366e508.js";
$main_css_url = get_template_directory_uri() . "/modules/stroller-finder/assets/index.3048c100.css";
$vendor_js_url = get_template_directory_uri() . "/modules/stroller-finder/assets/vendor.8c54f31e.js";

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" crossorigin src="<?php echo $main_js_url; ?>"></script>
<link rel="modulepreload" href="<?php echo $vendor_js_url; ?>">
<link rel="stylesheet" href="<?php echo $main_css_url; ?>">

<!-- <div id="app"></div> -->
<div id="app" data-url="<?php echo $joie_category_rest_url; ?>" data-search-url="<?php echo $joie_search_rest_url; ?>" data-settings-url="<?php echo $joie_settings_rest_url; ?>" data-wait-message="<?php echo $joie_please_wait_message; ?>" data-start-new-search-text="<?php echo $joie_start_new_search_text; ?>" data-page-title="<?php echo $joie_page_title; ?>" data-page-subtitle="<?php echo $joie_page_subtitle; ?>" data-page-description="<?php echo $joie_page_description ?>" data-banner-url="<?php echo $joie_banner_url; ?>" data-under-banner-title="<?php echo $joie_under_banner_title; ?>" data-under-banner-subtitle="<?php echo $joie_under_banner_subtitle; ?>">
</div>
<?php get_footer(); ?>