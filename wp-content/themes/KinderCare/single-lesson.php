<?php
/**
 * The Template for displaying all single posts.
 * @package Kindergarten Education
 */

get_header(); ?>

<main id="skip_content" role="main">
	<div class="container">
	    <div class="main-wrapper">
	    	<?php
            $kindergarten_education_layout_option = get_theme_mod( 'kindergarten_education_layout_options','Right Sidebar');
	        if($kindergarten_education_layout_option == 'One Column'){ ?>
				<div class="content_box">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop. ?>
		       	</div>
		    <?php }else if($kindergarten_education_layout_option == 'Three Columns'){ ?>
		    	<div class="row">
					<div id="sidebar" class="col-lg-3 col-md-3 pt-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
					<div class="content_box col-lg-6 col-md-6">
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. ?>
			       	</div>
					<div id="sidebar" class="col-lg-3 col-md-3 pt-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php }else if($kindergarten_education_layout_option == 'Four Columns'){ ?>
				<div class="row">	
					<div id="sidebar" class="col-lg-3 col-md-3 pt-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
					<div class="content_box col-lg-3 col-md-3">
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. ?>
			       	</div>
				</div>
			<?php }else if($kindergarten_education_layout_option == 'Grid Layout'){ ?>
				<div class="row">
					<div class="content_box col-lg-8 col-md-8">
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. ?>
			       	</div>
		    	</div>
		    <?php }else if($kindergarten_education_layout_option == 'Left Sidebar'){ ?>
		    	<div class="row">
		    			<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. ?>
			       	</div>
		    	</div>
		    <?php }else if($kindergarten_education_layout_option == 'Right Sidebar'){ ?>
			    <div class="row">
			       	<div class="content_box <?php if( get_theme_mod( 'kindergarten_education_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
                        <?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. ?>
                        
			       	</div>
				</div>
                <?php 
                    $relatedTips = get_field('related_programs');// array of post objects
                    if($relatedTips){
                        echo '<hr class="section-break">';
                        echo '<h2 class="headline headline--medium">Related Tip(s)</h2>';
                        echo '<ul class="link-list min-list">';
                        foreach($relatedTips as $tip){ //for each a post object
                        ?>
                        <li><a href="<?php echo get_the_permalink($tip);?>">
                                <?php echo get_the_title($tip);?>
                            </a>
                        </li>   
                <?php }

                    }
                    echo '</ul>';
                ?>
               
			<?php }?>
		    <div class="clearfix"></div>
	    </div>
	</div>
</main>
<?php get_footer(); ?>