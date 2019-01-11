<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<aside>
    <ul>
        <li id="isearch">
			<?php get_search_form(); ?>
        </li>
        
        <li id="category">
            <div>
                <h2>Category</h2>
                <ul>
                    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0&exclude=3'); ?>
                </ul> 
            </div>            
        </li>
        
        <li id="archive">
            <div>
                <h2>Archives</h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </div>            
        </li>
        
        <li id="meta">
            <div>
                <h2>Meta</h2>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </div>            
        </li>
    </ul>
</aside>