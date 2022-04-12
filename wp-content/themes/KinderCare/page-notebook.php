<?php
/**
 * The template for displaying the notebook page for user generated content.
 * @package Kindergarten Education
 */
if(!is_user_logged_in()){
    wp_redirect(esc_url(site_url('/')));
    exit;
}
get_header(); ?>
 <div class="container"> 
<ul id="my-notes">
    <?php
    $userNotes = new WP_Query(array(
    'post_type' => 'notebook',
    'posts_per_page' => -1,
    'author' => get_current_user_id()
    ));

    while($userNotes->have_posts()){
        $userNotes->the_post();
        ?>
        <li>
        <input class="note-title-field" value="<?php echo esc_attr(get_the_title()); ?>">

        <span class="edit-note" onclick="test()"><i class="fa fa-pencil" aria-hidden="true"></i>  Edit </span>
        <span class="delete-note"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </span>
        <textarea class="note-body-field">
       <?php echo esc_attr(strip_tags(get_the_content())); ?>
       </textarea>
        </li>
        <?php
        }
        ?>

</ul>      
</div>

<script type="text/javascript" src="/js/notebook.js"></script>
<?php get_footer(); ?>