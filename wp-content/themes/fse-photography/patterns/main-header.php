<?php
 /**
  * Title: Main Header
  * Slug: fse-photography/main-header
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"foreground","className":"main-header","layout":{"type":"default"}} -->
<div class="wp-block-group main-header has-foreground-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"65%"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}}},"className":"inner-top"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-top" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"70%","className":"top-info-wrapper"} -->
<div class="wp-block-column is-vertically-aligned-center top-info-wrapper" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"className":"top-info-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group top-info-box"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"top-info-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group top-info-row"><!-- wp:image {"id":1852,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/mail.png' ); ?>" alt="" class="wp-image-1852" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small"} -->
<p class="has-background-color has-text-color has-link-color has-extra-small-font-size"><?php esc_html_e('support@example.com','fse-photography'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"top-info-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group top-info-row"><!-- wp:image {"id":1864,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/phone.png' ); ?>" alt="" class="wp-image-1864" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small"} -->
<p class="has-background-color has-text-color has-link-color has-extra-small-font-size"><?php esc_html_e('+652 5656 656','fse-photography'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"top-link"} -->
<div class="wp-block-column is-vertically-aligned-center top-link" style="flex-basis:30%"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","iconBackgroundColor":"tertiary-bg-color","iconBackgroundColorValue":"#f9f9f9","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"lower-header","layout":{"type":"constrained","contentSize":"65%"}} -->
<div class="wp-block-group lower-header" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"#ffffff4f","width":"1px"},"right":{},"left":{}}},"className":"inner-lower-header","fontFamily":"inter"} -->
<div class="wp-block-columns inner-lower-header has-inter-font-family" style="border-top-color:#ffffff4f;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo "} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"logo","layout":{"type":"default"}} -->
<div class="wp-block-group logo" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg-color"}}}},"textColor":"secondary-bg-color"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"header-nav"} -->
<div class="wp-block-column is-vertically-aligned-center header-nav" style="flex-basis:55%"><!-- wp:navigation {"textColor":"background","overlayBackgroundColor":"foreground","overlayTextColor":"background","className":"head-menu-right","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}}  -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Portfolio","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-btn"} -->
<div class="wp-block-column is-vertically-aligned-center header-btn" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-bg-color","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-background-color has-secondary-bg-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Book Now','fse-photography'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->