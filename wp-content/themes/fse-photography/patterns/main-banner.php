<?php

/**
 * Title: Header Media
 * Slug: fse-photography/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":1885,"dimRatio":70,"overlayColor":"foreground","isUserOverlayColor":true,"focalPoint":{"x":0.24,"y":0.1},"minHeight":650,"align":"wide","style":{"border":{"radius":"30px"}},"className":"slider","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-cover alignwide slider" style="border-radius:30px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1885" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" style="object-position:24% 10%" data-object-fit="cover" data-object-position="24% 10%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content-box","layout":{"type":"default"}} -->
<div class="wp-block-group slider-content-box"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"slider-content"} -->
<div class="wp-block-columns slider-content"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-text"} -->
<div class="wp-block-column is-vertically-aligned-center slider-text" style="flex-basis:50%"><!-- wp:heading {"level":6,"style":{"spacing":{"padding":{"top":"10px","bottom":"5px","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"typography":{"letterSpacing":"3px","textTransform":"uppercase","lineHeight":"1"}},"backgroundColor":"secondary-bg-color","className":"shot-heading"} -->
<h6 class="wp-block-heading shot-heading has-secondary-bg-color-background-color has-background" style="padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:5px;padding-left:var(--wp--preset--spacing--40);letter-spacing:3px;line-height:1;text-transform:uppercase"><?php esc_html_e('focus','fse-photography'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"55px","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"spacing":{"margin":{"top":"0"}}},"fontFamily":"italiana"} -->
<h1 class="wp-block-heading has-text-align-left has-italiana-font-family" style="margin-top:0;font-size:55px;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('PHOTOGRAPHY','fse-photography'); ?><br><?php esc_html_e('SERVICES','fse-photography'); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60"}}},"className":"slider-img-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group slider-img-box" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:image {"id":2007,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide-img1.png' ); ?>" alt="" class="wp-image-2007" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2005,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide-img2.png' ); ?>" alt="" class="wp-image-2005" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2003,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide-img3.png' ); ?>" alt="" class="wp-image-2003" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2001,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide-img4.png' ); ?>" alt="" class="wp-image-2001" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"49px","className":"slider-spacer"} -->
<div style="height:49px" aria-hidden="true" class="wp-block-spacer slider-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:image {"id":2027,"sizeSlug":"full","linkDestination":"none","align":"right","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px"}}},"className":"slider-main-img"} -->
<figure class="wp-block-image alignright size-full has-custom-border slider-main-img"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide-img.png' ); ?>" alt="" class="wp-image-2027" style="border-top-left-radius:20px;border-top-right-radius:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->