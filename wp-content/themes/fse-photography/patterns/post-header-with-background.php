<?php
 /**
  * Title: Post Header With Background
  * Slug: fse-photography/post-header-with-background
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0px","bottom":"0px","left":"0px"}}},"className":"banner alignfull","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group alignfull banner" style="padding-top:var(--wp--preset--spacing--60);padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/banner.jpg' ); ?>","dimRatio":80,"overlayColor":"foreground","isUserOverlayColor":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"border":{"radius":"30px"}}} -->
<div class="wp-block-cover" style="border-radius:30px;margin-bottom:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/banner.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"alignwide"} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"textAlign":"center","level":1} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->