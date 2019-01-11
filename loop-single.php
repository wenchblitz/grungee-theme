<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<artcile id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-single">
					<div class="post-entry">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                            <div class="entry-meta">
                                <?php the_category(', ')?> | <a href="javascript:void()"><?php the_time('F j, Y') ?></a> | <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php printf( get_the_author() ); ?></a>
                            </div><!--.entry-meta-->
                            
                            <div class="image-content">
                                <?php the_post_thumbnail(array(132,132)); ?> 
                            </div><!--//image-content-->
                        
                            <div class="the-content">
                                <?php the_content(); ?>
                            </div><!--.the-content-->
                        
							<?php edit_post_link( __( '[Edit]', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                            
                                <div class="clear"></div>
                         
					</div><!-- .post-entry -->
				</div><!--.single-entry-->                    
				</article><!-- #post-## -->
                
                <?php comments_template( '', true ); ?> 
                
<?php endwhile; // end of the loop. ?>