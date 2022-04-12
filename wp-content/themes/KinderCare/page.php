<?php
/**
 * The template for displaying all pages.
 * @package Kindergarten Education
 */

get_header(); ?>

<?php do_action( 'kindergarten_education_page_header' ); ?>

<main id="skip_content" class="content_box" role="main">

<?php
 $theParent = wp_get_post_parent_ID(get_the_ID());
 if($theParent){ ?>
<div class="metabox metabox--position-up metabox--with-home-link">
 <p><a class="metabox__blog-home-link" href="<?php echo
get_permalink($theParent); ?>">
 <i class="fa fa-home" aria-hidden="true"></i> Back to <?php
echo get_the_title($theParent); ?></a>
 <span class="metabox__main"><?php echo the_title(); ?>
</span></p>
 </div>
 <?php }

 ?>






    <div class="container background-img-skin">
        <div class="main-wrapper">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title();?></h1>
                <?php if(has_post_thumbnail()) { ?>
                    <div class="feature-box">   
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                <div class="metabox metabox--position-up metabox--withhome-link">
 <p><a class="metabox__blog-home-link" href="#">
 

<div class="container container--narrow page-section">





<div class="generic-content">
    <?php the_content() ?>
</div>

</p>
 </div>
                
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || '0' != get_comments_number() ) {
                        comments_template();
                    }
                ?>
            <?php endwhile; // end of the loop. ?>      
            <div class="clear"></div>    
        </div>
    </div>
</main>

<?php do_action( 'kindergarten_education_page_footer' ); ?>

<?php get_footer(); ?>