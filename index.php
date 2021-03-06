<?php get_header(); ?>

<div class="stars"></div>
<div class="twinkling"></div>
<div class="news">


    <!-- The post loop -->
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>



            <!-- Includes link to posts, title of posts and content of posts. -->
            <article class="post" id="news">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>

        <!-- See newer/older posts -->
        <div class="newer-posts">
            <?php previous_posts_link("Newer Posts") ?>
        </div>
        <div class="older-posts">
            <?php next_posts_link("Older Posts") ?>
        </div>
</div>

<?php else :
        echo '<p>No content found</p>';

    endif;

    get_footer(); ?>