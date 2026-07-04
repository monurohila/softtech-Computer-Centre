<?php get_header(); ?>
<main class="container page-wrap">
  <?php while(have_posts()): the_post(); ?>
    <header class="page-hero"><h1><?php the_title(); ?></h1><p>Professional computer education and practical skill development at Softech Computer Centre, Ganaur.</p></header>
    <article class="content"><?php the_content(); ?></article>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
