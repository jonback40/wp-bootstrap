<?php get_header(); ?>
<div class="page-main">
    <div class="page-title">
        <div class="container">
	        
            <h1><?php _e('Page Not Found', get_template()); ?></h1>
            
        </div>
    </div>
    <div class="inner">
    	<div class="container">
    		
    		<h2><?php _e('This is somewhat embarrassing, isn\'t it?', get_template()); ?></h2>
    		<p><?php _e('It looks like nothing was found at this location. Maybe try a search?', get_template()); ?></p>
    		
    		<div class="search-bar">
	    		<?php get_search_form(); ?>
    		</div>
    		
    	</div>
    </div>
</div>
<?php get_footer(); ?>
