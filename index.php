<?php get_header(); ?>
<main class="container page-wrap"><header class="page-hero"><h1>Blog / News</h1><p>Latest updates, computer tips and career guidance.</p></header><div class="post-grid"><?php if(have_posts()): while(have_posts()): the_post(); ?><article class="post-card"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p><a href="<?php the_permalink(); ?>">Read More →</a></article><?php endwhile; else: ?><p>No posts found.</p><?php endif; ?></div></main>
<?php get_footer(); ?>
