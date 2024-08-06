<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title">Images</h1>
            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            while (have_posts()) :
                the_post();
            ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title('<h2 class="entry-title">', '</h2>'); ?></a>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            endwhile;

            // Pagination.
            the_posts_pagination();

        else :
            ?>

            <p>No images found.</p>

        <?php endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
