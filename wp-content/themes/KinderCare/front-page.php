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
		    <?php }else if($kindergarten_education_layout_option == 'Right Sidebar'){ ?>
			    <div class="row">
			       	<div class="content_box <?php if( get_theme_mod( 'kindergarten_education_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. ?>
			    </div>	
				<div class="col-lg-4 col-md-4">
				<div id="responsive-search">
                  <?php get_search_form(); ?>
                </div>
				<h3>Recent Post</h3>
					<div id="sidebar" class="pt-3">
					<aside id="custom-post" class="widget widget_custom-post">
						<h3 class="widget-title"><?php esc_html_e( 'Lessons', 'kindergarten-education' ); ?></h3>
						<ul>
							<?php
									$homepagePost = new WP_Query(array(
									'posts_per_page' => 2,
									'post_type' => 'lesson'
									));
									while($homepagePost->have_posts()){
									$homepagePost->the_post();?>
									<a href="<?php the_permalink();?>">
									<li> <?php the_title(); ?> </li>
									</a>
									<?php }
									?>

						</ul>
					</aside>
					</div>

					<div id="sidebar" class="pt-3">
					<aside id="custom-post" class="widget widget_custom-post">
						<h3 class="widget-title"><?php esc_html_e( 'Tips', 'kindergarten-education' ); ?></h3>
						<ul>
							<?php
									$homepagePost = new WP_Query(array(
									'posts_per_page' => 2,
									'post_type' => 'tip'
									));
									while($homepagePost->have_posts()){
									$homepagePost->the_post();?>
									<a href="<?php the_permalink();?>">
									<li> <?php the_title(); ?> </li>
									</a>
									<?php }
									?>

						</ul>
					</aside>
					</div>

					<div id="sidebar" class="pt-3">
					<aside id="custom-post" class="widget widget_custom-post">
						<h3 class="widget-title"><?php esc_html_e( 'Projects', 'kindergarten-education' ); ?></h3>
						<ul>
							<?php
									$homepagePost = new WP_Query(array(
									'posts_per_page' => 2,
									'post_type' => 'project'
									));
									while($homepagePost->have_posts()){
									$homepagePost->the_post();?>
									<a href="<?php the_permalink();?>">
									<li> <?php the_title(); ?> </li>
									</a>
									<?php }
									?>

						</ul>
					</aside>
					</div>

				
				</div>
			

			<?php }?>

			
		    <div class="clearfix"></div>
	    </div>
	</div>
</main>
<?php get_footer(); ?>


