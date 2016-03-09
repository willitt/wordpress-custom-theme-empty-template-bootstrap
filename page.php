<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php   while(have_posts()): the_post(); ?>
<div id="main" class="col-xs-12 col-md-8">
<div <?php post_class() ?>>
<h1>THIS IS A PAGE PAGE!</h1>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if(has_post_thumbnail()): ?>
<div class="post-thumb">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail();?></a>
</div>
<?php endif; ?>
<div class="post-content">
    <?php the_content(''); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer() ?>