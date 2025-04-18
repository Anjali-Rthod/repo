<?php
/**
 * Footer minimal
 */
$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Footer minimal', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"className":"ona-container","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group ona-container"><!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
			<div class="wp-block-column" style="flex-basis:35%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"2rem"}}},"fontSize":"medium"} -->
			<h3 class="has-medium-font-size" id="for-collaboration-and-service-offers-feel-free-to-get-it-touch" style="margin-bottom:2rem">' . __( 'For collaboration and service offers feel free to get it touch.', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"showSubmenuIcon":false,"overlayMenu":"never","className":"ona-text-letter-spacing","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
			<!-- wp:home-link {"label":"' . __( 'Home', 'ona' ) . '"} /-->

			<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"24%"} -->
			<div class="wp-block-column" style="flex-basis:24%"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
			
			' . $form . '

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group" style="padding-top:1.5rem"><!-- wp:heading {"className":"ona-alt-font"} -->
			<h2 class="ona-alt-font" id="follow">' . __( 'Follow', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px"}}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns {"verticalAlignment":null} -->
			<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"is-style-no-spacing ona-copyright ona-sm-down-text-align-center","fontSize":"tiny"} -->
			<p class="is-style-no-spacing ona-copyright ona-sm-down-text-align-center has-text-light-color has-text-color has-link-color has-tiny-font-size">' . sprintf( __( '© %d Powered by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com/wordpress-themes/ona-block-wordpress-theme/" style="color:inherit">' . esc_html__( 'Ona WordPress theme', 'ona' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":""} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"className":"ona-sm-down-justify-content-center","style":{"spacing":{"blockGap":"20px"}},"fontSize":"tiny"} -->
			<!-- wp:navigation-link {"label":"' . __( 'Privacy Policy', 'ona' ) . '","url":"Privacy%20Policy","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"' . __( 'Terms \u0026amp; Conditions', 'ona' ) . '","url":"Terms%20\u0026%20Conditions","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);



