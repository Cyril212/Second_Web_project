<?php get_header()?>
<?php get_sidebar()?>
<div class="w3-col m8 l9">
<div class="w3-card-2">
<?php while(have_posts()):the_post()?>
<h2><a href="<?php the_permalink()?>"><?php the_title()?></h2>
<p>
<a href="<?php echo get_author_link(false, $authordata->ID,$authordata->user_nicename);?>"><?php the_author()?></a>
</p>
<?php the_content();?>
<?php endwhile;?>
</div>
</div>
<?php get_footer()?>

