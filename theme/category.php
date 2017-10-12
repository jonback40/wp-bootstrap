<?php get_header(); ?>
<div class="page-main">
    <div class="page-title">
        <div class="container">
            
            <h1>Categories</h1>
            
        </div>
    </div>
    <div class="inner">
        <div class="container">
            
            <?php if (have_posts()): ?>
                <div class="posts">
                    <?php while (have_posts()): the_post(); ?>
                        <div class="post">
                            <div class="post-inner">
                                <div class="post-thumbnail">
	                                <a href="<?php the_permalink(); ?>" title="Read More">
		                                <?php the_post_thumbnail('medium'); ?>
	                                </a>
		                        </div>
                                <h3 class="post-title">
	                                <a href="<?php the_permalink(); ?>" title="Read More">
		                                <?php the_title(); ?>
	                                </a>
			                    </h3>
                                <div class="post-author">By <?php the_author(); ?></div>
                                <div class="post-date">On <?php the_time('F jS, Y'); ?></div>
                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                                <div class="post-links">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-default post-permalink" title="Read More">Read More</a>
                                    <a href="<?php comments_link(); ?>" class="post-comments-link" title="View Comments">
                                        <?php comments_number(); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <nav class="pager">
                    <?php pagination_bar(); ?>
                </nav>
            <?php else: ?>
                <p><em>Sorry, no posts were found.</em></p>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>
