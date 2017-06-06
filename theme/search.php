<?php get_header(); ?>
<div class="page-main">
    <div class="page-title">
        <div class="container">
            
            <h1><?php echo get_bloginfo('name'); ?></h1>
            
        </div>
    </div>
    <div class="inner">
        <div class="container">
            
            <h2><?php printf(__('Search Results for: %s', get_template()), '<small>' . get_search_query() . '</small>'); ?></h2>
            
            <?php
            global $query_string;
            $query_args = explode('&', $query_string);
            $search_query = array();
            
            foreach ($query_args as $key => $string) {
                $query_split = explode('=', $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            }
            
            $the_query = new WP_Query($search_query);
            if ($the_query->have_posts()):
            ?>
                <ul class="search-results">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <h4>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <?php the_excerpt(); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', get_template()); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
