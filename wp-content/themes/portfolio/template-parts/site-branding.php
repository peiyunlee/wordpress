<?php

/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */

?>

<div class="site-branding">

	<?php if (has_custom_logo()) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>

</div><!-- .site-branding -->