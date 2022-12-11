<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
    <h1 class="my-4 page-title"><?php wp_title(); ?></h1>
    <nav class="navbar">
        <?php get_the_category(); ?>
    </nav>
    <?php the_content(); ?>
    <?php comments_template(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
