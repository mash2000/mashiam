<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Blogus
 */
get_header(); ?>
<main id="content">
    <div class="container">
    <!--row-->
    <div class="row">
        <!--==================== breadcrumb section ====================-->
        <?php do_action('blogus_breadcrumb_content'); ?>
        <!--col-md-8-->
        <?php 
        $blogus_content_layout = esc_attr(get_theme_mod('blogus_content_layout','align-content-right'));
        if($blogus_content_layout == "align-content-left")
        { ?>
        <aside class="col-md-4">
            <?php get_sidebar();?>
        </aside>
        <?php }
        elseif($blogus_content_layout == "grid-left-sidebar")
        { ?>
        <aside class="col-md-4">
            <?php get_sidebar();?>
        </aside>
        <?php }
        if($blogus_content_layout == "align-content-right"){ ?>
        <div class="col-md-8">
            <?php get_template_part('template-parts/content', get_post_format()); ?>
        </div>
        <?php } elseif($blogus_content_layout == "align-content-left") { ?>
        <div class="col-md-8">
            <?php get_template_part('template-parts/content', get_post_format()); ?>
        </div>
        <?php } elseif($blogus_content_layout == "full-width-content") { ?>
         <div class="col-md-12">
            <?php get_template_part('template-parts/content', get_post_format()); ?>
        </div>
         <?php }  if($blogus_content_layout == "grid-left-sidebar"){ ?>
        <div class="col-md-8">
            <?php get_template_part('content','grid'); ?>
        </div>
        <?php } elseif($blogus_content_layout == "grid-right-sidebar") { ?>
        <div class="col-md-8">
            <?php get_template_part('content','grid'); ?>
        </div>
        <?php } elseif($blogus_content_layout == "grid-fullwidth") { ?>
         <div class="col-md-12">
           <?php get_template_part('content','grid'); ?>
        </div>
         <?php }  ?>
        
        <!--/col-md-8-->
        <?php if($blogus_content_layout == "align-content-right")  { ?>
        <!--col-md-4-->
        <aside class="col-md-4">
            <?php get_sidebar();?>
        </aside>
        <!--/col-md-4-->
        <?php } 
        elseif($blogus_content_layout == "grid-right-sidebar")
        { ?>
        <aside class="col-md-4">
            <?php get_sidebar();?>
        </aside>
        <?php }?>
    </div>
    <!--/row-->
</div>
<!--/container-->
</main>    
<?php
get_footer();
?>