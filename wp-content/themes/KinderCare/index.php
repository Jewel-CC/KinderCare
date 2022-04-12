<?php
/**
 * The template for displaying Home page.
 * @package Kindergarten Education
 */
get_header(); 
?>
<?php /** post section **/ ?>
<main id="skip_content" role="main">
  <div class="container">
    <?php
    $kindergarten_education_layout_option = get_theme_mod( 'kindergarten_education_layout_options','Right Sidebar');
 if($kindergarten_education_layout_option == 'Three Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3 pt-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
        <div id="blog_sec" class="blog-section col-lg-6 col-md-6">
    

    <?php }if($kindergarten_education_layout_option == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="blog_sec" class="blog-section <?php if( get_theme_mod( 'kindergarten_education_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
          <?php if ( have_posts() ) :
            /* Start the Loop */          
            $homepageEvents = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type' => 'post'
            ));        
            while ($homepageEvents->have_posts() ) : $homepageEvents->the_post();
              get_template_part( 'template-parts/content',get_post_format() );           
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'kindergarten_education_enable_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php kindergarten_education_pagination_type(); ?>
            </div>
          <?php  } 
          ?>

        </div>
        <div class="<?php if( get_theme_mod( 'kindergarten_education_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>       
      </div>
    <?php } 


?>  
      
      
</main>


<div class="clearfix"></div>
<?php  get_footer();  ?> 