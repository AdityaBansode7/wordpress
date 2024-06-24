<?php
 /**
  * Title: About
  * Slug: fse-photography/about
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"about","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group about" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:spacer {"height":"26px"} -->
<div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","className":"about-img-box"} -->
<div class="wp-block-column about-img-box" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2033,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/about1.png' ); ?>" alt="" class="wp-image-2033" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2042,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/about2.png' ); ?>" alt="" class="wp-image-2042" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"var:preset|spacing|80"}}},"className":"about-content"} -->
<div class="wp-block-column is-vertically-aligned-center about-content" style="padding-left:var(--wp--preset--spacing--80);flex-basis:50%"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg-color"}}},"typography":{"letterSpacing":"3px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"secondary-bg-color","fontSize":"medium","fontFamily":"josefin-sans"} -->
<h4 class="wp-block-heading has-secondary-bg-color-color has-text-color has-link-color has-josefin-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Wedding','fse-photography'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"38px"}},"fontFamily":"italiana"} -->
<h2 class="wp-block-heading has-italiana-font-family" style="font-size:38px"><?php esc_html_e('Your Wedding Our','fse-photography'); ?><br><?php esc_html_e('Visualization','fse-photography'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"26px"} -->
<div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->