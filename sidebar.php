
<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">
	<div class="small-12 box-3035" style="background-color: #fefefe; padding: 1rem; margin-bottom: 1rem;">
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>
	</div>
</div>