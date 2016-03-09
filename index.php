<?php get_header(); ?>
<div id="main" class="col-xs-12 col-sm-12 col-md-8">
<h1>This is the index page!</h1>
<?php if(have_posts()): ?>
<?php   while(have_posts()): the_post(); ?>
<div <?php post_class() ?>>
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
<?php else: ?>
<h2>No Posts to Display</h2>
<p>There are no posts on this blog at present, please visit again at a later date.</p>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer() ?>