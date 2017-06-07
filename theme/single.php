<?php get_header(); ?>
<div class="page-main">
    <div class="page-title">
        <div class="container">
            
            <h1><?php echo get_bloginfo('name'); ?></h1>
            
        </div>
    </div>
    <div class="inner">
        <div class="container">
            
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="post">
                        <div class="post-inner">
                            <div class="post-thumbnail"><?php the_post_thumbnail('full'); ?></div>
                            <h3 class="post-title"><?php the_title(); ?></h3>
                            <div class="post-author">By <?php the_author(); ?></div>
                            <div class="post-date">On <?php the_time('F jS, Y'); ?></div>
                            <div class="post-body"><?php the_content(); ?></div>
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
