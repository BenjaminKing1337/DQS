<?php

get_header(); ?>

<!-- The post loop -->
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">
            <!-- gets children from functions.php -->
            <?php

            if (has_children() or $post->post_parent > 0) { ?>
                <nav class="site-nav children-links clearfix">
                    <!-- parent links with children -->
                    <span class="parent-link">
                        <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
                            <?php echo get_the_title(get_top_ancestor_id()); ?>
                        </a></span>

                    <ul>
                        <?php $args = array(
                            'child_of' => get_top_ancestor_id(),
                            'title_li' => ''
                        ); ?>
                        <!-- function to list all pages -->
                        <?php wp_list_pages($args); ?>
                    </ul>
                </nav>
            <?php } ?>
            <?php if (get_field('bg_img', 12)) : ?>
            <div style="background-image: url('<?php the_field('bg_img', 12); ?>')">
            <?php endif; ?>
            <!-- the page content -->
            <?php the_content(); ?>
        </article>
<?php endwhile;

else :
    echo '<p>No content found</p>';


endif;

get_footer();

?>