<?php get_header(); ?>
	<div class="page-banner">
		
    </div>
        
    <div class="page-main">        
        <div class="inner">
            <div class="default-section">
	            <h1 class="pageTitle">News</h1>
	            
                <div class="blog-post-display">
					<?php // Display blog posts on any page
						while ( have_posts() ) : the_post();
					?>
                        
                    <div class="blog-post">
                        <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                        <small>Posted on <?php the_time('n.j.Y') ?> </small>
                        <div class="blog-post-thumb"><?php the_post_thumbnail(); ?></div>
                        <div class="blog-post-summary"><?php the_excerpt(); ?></div>
                    </div>
                    <?php endwhile; ?>
				</div>
	
                <nav class="blog-pagination">
                    <?php pagination_bar(); ?>
                </nav>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
