<div id="sidebar" class="col-xs-12 col-sm-12 col-md-4 text-center">
    <h1>This is the sidebar!</h1>
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div>