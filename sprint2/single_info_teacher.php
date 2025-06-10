<?php get_header(); ?>

<div style="display: flex; align-items: flex-start; gap: 30px; padding: 40px;">
    <div style="flex: 1;">
        <?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail('large');
        }  
        ?>
    </div>
    <div style="flex: 2; font-size: 24px; line-height: 1.6; font-family: serif;">
        <h2 style="font-weight: bold; font-variant: small-caps;"><?php the_title(); ?></h2>
        <div>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>