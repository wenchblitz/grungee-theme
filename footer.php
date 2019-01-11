<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

</div><!--#container-->

	<div class="clear"></div>
    
<footer>
	<div id="footer-wrapper">
    	<div id="upper-footer">
        	<div class="blogroll">
            	<h3>Blogroll</h3>
					<?php get_links_list(); ?>
            </div>
            
        	<div class="recent-comments">
           		<h3>Recent Comments</h3>
                    <ul>                    
						<?php
                          $comments = get_comments('number=10&amp;amp;status=approve');                
                          $true_comment_count = 0;                
                          foreach($comments as $comment) :
                        ?>
                        
                        <?php $comment_type = get_comment_type(); ?>
                        <?php if($comment_type == 'comment') { ?>
                        
                        <?php $true_comment_count = $true_comment_count +1; ?>
                        
                        <?php $comm_title = get_the_title($comment->comment_post_ID);?>
                        <?php $comm_link = get_comment_link($comment->comment_ID);?>
                        <?php $comm_comm_temp = get_comment($comment->comment_ID,ARRAY_A);?>
                        <?php $comm_content = $comm_comm_temp['comment_content'];?>
                        
                        <li>
                        <?php echo get_avatar( $comment, '45' ); ?>
                        <span class="footer_comm_author"><?php echo ("<strong>".$comment->comment_author."</strong>")?>:</span>&nbsp;<a href="<?php echo($comm_link)?>" title="<?php echo $comm_title?>"><?php echo wp_html_excerpt( $comment->comment_content, 125 ); ?>...</a>
                        </li> 
                        
                        <?php } ?>
                        
                        <?php if($true_comment_count == 5) {break;} ?>
                        <?php endforeach;?>                    
                    </ul>                                       
            </div>
            	
        	<div class="recent-post">
            	<h3>Recent Post</h3>
                <ul>
                    <?php
                        $args = array( 'numberposts' => '11' );
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                        }
                    ?>
                </ul>
            </div>                        
        </div><!--#upper-footer-->
        	
            <div class="clear"></div>
            
		<div id="lower-footer">
        	<p class="left">All Rights Reserved, 2012</p><p class="right">Themes by: <a href="http://wenchblitz.x10.mx/" target="_blank" alt="" title="">wenchblitz</a></p>
        </div><!--#lower-footer-->           
    </div><!--.footer-wrapper-->
</footer> 

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
