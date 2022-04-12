<?php
/**
 * The Sidebar containing the main widget areas.
 * @package Kindergarten Education
 */
?>
					 <div id="responsive-search">
                        <?php get_search_form(); ?>
                    </div>
                     <h3>Recent Post</h3>
                     <div id="sidebar" class="pt-3">
                            <aside id="custom-post" class="widget widget_custom-post">
                                <h3 class="widget-title"><?php esc_html_e( 'Lessons', 'kindergarten-education' ); ?></h3>
                                <ul>
                                    <?php
                                            $archiveProject = new WP_Query(array(
                                            'posts_per_page' => 2,
                                            'post_type' => 'lesson'
                                            ));
                                            while($archiveProject->have_posts()){
                                            $archiveProject->the_post();?>
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
                                             $archiveProject = new WP_Query(array(
                                            'posts_per_page' => 2,
                                            'post_type' => 'tip'
                                            ));
                                            while($archiveProject->have_posts()){
                                            $archiveProject->the_post();?>
                                            <a href="<?php the_permalink();?>">
                                            <li> <?php the_title(); ?> </li>
                                            </a>
                                            <?php }
                                            ?>

                                </ul>
                            </aside>
					</div>