<?php get_header(); ?>
<div class="page-main">
    <div class="page-title">
        <div class="container">
            
            <h1><?php the_title(); ?></h1>
            
        </div>
    </div>
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    
                    <?php while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    
                </div>
                <div class="col-md-3 col-md-pull-9">
                    
                    <ul class="subnav">
                        <?php
                        if (!$post->post_parent) {
                            $children = wp_list_pages('title_li=&child_of=' . $post->ID . '&echo=0');
                        } else if ($post->ancestors) {
                            $ancestors = end($post->ancestors);
                            $children = wp_list_pages('title_li=&child_of=' . $ancestors . '&echo=0');
                        }
                        ?>
                        
                        <?php if ($children): ?>
                            <ul>
                                <?php echo $children; ?>
                            </ul>
                        <?php endif; ?>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
