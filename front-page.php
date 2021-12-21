<?php get_header(); ?>

<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<?php if (have_posts()) : while (have_posts()) :
    the_post();
    the_content();
 ?>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<img src="http://localhost/leofly_lorenzo/wordpress/wp-content/themes/leofly/assets/images/Nebula.gif">
<?php 
// the_time('F jS, Y') 
?></h4>
<p><?php 
// the_content(__('(more...)')); 
?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
<?php 
// get_sidebar(); 
?>
</div>

<?php get_footer(); ?>