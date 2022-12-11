<?php get_header(); ?>
<h5 class="mt-4"><?php single_tag_title(); ?></h5>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <div class="my-4">
            <h2 class="card-title">
                <a href="<?php the_permalink(); ?>" class="link-dark nav-link">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="card my-2">
                <div class="card-body">
                    <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="card-img-top">
                    <?php endif; ?>
                    <p class="card-text">
                        <small class="text-muted">
                            <?php the_time('j F Y'); ?>
                        </small>
                        <?php the_tags(); ?>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-dark shadow-none">
                            Show more
                        </a>
                    </p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <h3>Nothing to show</h3>
<?php endif; ?>
<?php the_posts_pagination(); ?>
<?php get_footer(); ?>

