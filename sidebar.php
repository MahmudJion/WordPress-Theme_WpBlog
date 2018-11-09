<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
    	<?php get_search_form(); ?>
    	<div class="header-search">	
        </div>
	</div>
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module sidebar-module-inset">
		<h4>Archive Posts</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives('type=monthly'); ?>
		</ol>
	</div>
	<div class="sidebar-module sidebar-module-inset">
		<h4>Find me</h4>
		<ol class="list-unstyled">
			<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
			<li><a href="<?php echo get_option('facebook'); ?>">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->


