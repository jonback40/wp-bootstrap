<?php get_header(); ?>
<div class="page-main blog-detail">    
    <div class="inner">
        <div class="container">
	        
	        <div class="page-title">
		        <h1><?php the_title(); ?></h1>
		    </div>
            
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="post">
                        <div class="post-inner">
                            <div class="post-thumbnail"><?php the_post_thumbnail('full'); ?></div>
<!--                             <h3 class="post-title"><?php the_title(); ?></h3> -->
                            <div class="post-author">By <?php the_author(); ?></div>
                            <div class="post-date">On <?php the_time('F jS, Y'); ?></div>
                            <div class="post-body"><?php the_content(); ?></div>
                        </div>
                        
                        <div class="post-share">
	                        <div class="sharethis-inline-share-buttons sharethis"></div>
                        </div>
                        
                        <hr>
                        <div class="post-comments-form"><?php comment_form(); ?></div>                                                
                        
                        <hr>
                        
                        <div class="post-comments">
                            <?php
                            $comments = get_comments(array(
                                'post_id' => get_the_ID(),
                                'status' => 'approve'
                            ));
                            
                            if (count($comments)):
                            ?>
                                <ul>
                                    <?php
                                    wp_list_comments(array(
                                        'reverse_top_level' => false
                                    ), $comments);
                                    ?>
                                </ul>
                            <?php else: ?>
                                <p class="text-center"><em>No comments have been posted yet.</em></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p><em>Sorry, no posts were found.</em></p>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ad0ee05dee63f0013b1bd60&product=inline-share-buttons' async='async'></script>
