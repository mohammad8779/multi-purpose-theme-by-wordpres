

<?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() )
        return;
?>
 
<?php if ( have_comments() ) : ?>
  <h2 class="ui-title-block-4"><?php comments_number( '0 Comment', '1 Comment', '% Comments'); ?></h2>
   <div class="ui-decor-3"></div>

    <?php wp_list_comments( array( 'callback' => 'ozun_comment', ) );?>


    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation">
        <h1 class="assistive-text"><?php __( 'Comment navigation', 'persona' ); ?></h1>
        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'persona' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'persona' ) ); ?></div>
    </nav>
    <?php endif;?>

<?php endif; ?>

<?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
?>
    <p class="nocomments"><?php __( 'Comments are closed.', 'persona' ); ?></p>
<?php endif; ?>

<?php 

            

        function add_comment_fields($fields) {
         
            $fields['url'] = '<div class="col-xs-12">
                                <input class="form-control" type="url" placeholder="Website">
                              </div>';

            $fields['author'] = '<div class="col-md-6">
                       <input name="author" class="form-control" type="text" placeholder="Name">
                     </div>';

            $fields['email'] = '<div class="col-md-6">
                       <input name="email" class="form-control" type="text" placeholder="Email">
                     </div>';
            return $fields;
         
        }
        add_filter('comment_form_default_fields','add_comment_fields');




    $com_args = array(
            
            'comment_field' =>  '<div class="col-xs-12">
                                   <textarea name="comment"class="form-control" rows="4" placeholder="Comments"></textarea>
                                 </div>',
            
            'label_submit' => __('post my comment', 'persona'),
            
            'class_submit'           => 'btn btn-default btn-round btn-block',
            'title_reply'       => '<h2 class="ui-title-block-4">leave a comment</h2> <div class="ui-decor-3"></div>',
            'class_form'      => 'form-reply ui-form-1',

        );



    comment_form($com_args); 

?>
