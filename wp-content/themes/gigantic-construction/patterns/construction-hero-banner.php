<?php
/**
 * Title: Construction Hero Banner
 * Slug: gigantic-construction/construction-hero-banner
 * Categories: banner
 */
?>

<!-- wp:group {"metadata":{"name":"Construction Hero Banner","categories":["banner"],"patternName":"gigantic-construction/construction-hero-banner"},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banner.jpg' ) ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":650,"sizeSlug":"large","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small);min-height:650px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banner.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-style-default" style="padding-top:0;padding-bottom:0;flex-basis:50%"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"accent-text","fontSize":"xxx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--small);margin-left:0;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Built With Strength & Precision', 'gigantic-construction' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium","left":"0","right":"0"}}}} -->
<p class="has-text-align-left" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--medium);margin-left:0"><?php esc_html_e( 'Donec sed odio dui. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nis.', 'gigantic-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"color":{"background":"#fab702"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;background-color:#fab702;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium);font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'LEARN MORE', 'gigantic-construction' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"white","style":{"border":{"radius":"0px","width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"borderColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-white-border-color wp-element-button" href="#" style="border-width:2px;border-radius:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium);font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'CONTACT US', 'gigantic-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->