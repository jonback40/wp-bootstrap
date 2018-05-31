<!-- home.php is used for the blog index view -->
<?php get_header(); ?>
<div class="page-main blog-index">
    <div class="inner">
        <div class="container">
	        <div class="page-title">
<!-- 	        	<h1><?php wp_title('', true,''); ?></h1> -->
					<h1>Blog</h1>
	        </div>
	        
	        <div class="row">
	        	<div class="col-sm-8">
		        	<?php if (have_posts()): ?>
		                <?php while (have_posts()): the_post(); ?>
		                    <div class="post">
		                        <div class="post-inner">
		                            <div class="post-thumbnail"><?php the_post_thumbnail('full'); ?></div>
		                            <h3 class="post-title"><?php the_title(); ?></h3>
		                            <div class="post-author">By <?php the_author(); ?></div>
		                            <div class="post-date">On <?php the_time('F jS, Y'); ?></div>
		                            <div class="post-body"><?php the_excerpt(); ?></div>
		                            
		                            <div class="post-links">
			                            <div class="sharethis-inline-share-buttons sharethis"></div>
			                            
		                            	<a href="<?php echo get_permalink(); ?>" class="btn btn-default"> Read More</a>		                            										
		                            </div>		                            
		                        </div>
		                    </div>
		                <?php endwhile; ?>
		            <?php else: ?>
		                <p><em>Sorry, no posts were found.</em></p>
		            <?php endif; ?>	
	        	</div>
	        	
	        	<div class="col-sm-4">
		        	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	        	</div>
	        </div>	        	        
            
        </div>
    </div>
</div>
<?php get_footer(); ?>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ad0ee05dee63f0013b1bd60&product=inline-share-buttons' async='async'></script>