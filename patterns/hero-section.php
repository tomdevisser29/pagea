<?php
/**
 * Title: Hero Section
 * Slug: pagea/hero-section
 * Categories: header, text
 * Description: A hero section that displays a heading, some text and a button (group).
 * Keywords: header, hero, intro, text
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"backgroundColor":"neutral-900","layout":{"type":"constrained"}} -->
<div
  class="wp-block-group alignfull has-neutral-900-background-color has-background"
  style="
    padding-top: var(--wp--preset--spacing--sm);
    padding-right: var(--wp--preset--spacing--lg);
    padding-bottom: var(--wp--preset--spacing--sm);
    padding-left: var(--wp--preset--spacing--lg);
  "
>
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","orientation":"vertical"}} -->
  <div
    class="wp-block-group alignwide"
    style="
      padding-top: var(--wp--preset--spacing--xl);
      padding-right: 0;
      padding-bottom: var(--wp--preset--spacing--xl);
      padding-left: 0;
    "
  >
    <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-100"}}}},"textColor":"neutral-100","fontSize":"h1"} -->
    <h2
      class="wp-block-heading has-neutral-100-color has-text-color has-link-color has-h-1-font-size"
    ></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-200"}}}},"textColor":"neutral-200"} -->
    <p class="has-neutral-200-color has-text-color has-link-color"></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons">
      <!-- wp:button {"className":"is-style-outline"} -->
      <div class="wp-block-button is-style-outline">
        <a class="wp-block-button__link wp-element-button" href="#test"></a>
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
