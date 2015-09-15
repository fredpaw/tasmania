<?php
	global $avia_config, $more;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();
	
	?>
	<div id="layerslider_archive" class="ls-wp-container ls-container ls-fullwidth" style="width: 1282px; height: 454px; max-width: 1200px; margin: 0px auto; visibility: visible;">
		<?php echo do_shortcode('[layerslider id="4"]'); ?>
	</div>
	<div id="page_title_line" class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-1  el_after_av_layerslider  el_before_av_layout_row  submenu-not-first container_wrap fullsize">
		<div class="flex_cell no_margin av_one_full  avia-builder-el-2  avia-builder-el-no-sibling   " style="vertical-align:top; padding:20px 0px 0px 0px ; ">
			<div class="flex_cell_inner">
				<section class="avia_codeblock_section avia_code_block_0" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
					<div class="avia_codeblock " itemprop="text">
						<p id="center-line" style="margin-bottom:0px;width:100%;"><span>塔斯马尼亚新闻<span></span></span></p>
						<p style="text-align:center;margin-top:0px;">NEWS</p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php	
		$showheader = true;
		if(avia_get_option('frontpage') && $blogpage_id = avia_get_option('blogpage'))
		{
			if(get_post_meta($blogpage_id, 'header', true) == 'no') $showheader = false;
		}
		
	 	if($showheader)
	 	{
			echo avia_title(array('title' => avia_which_archive()));
		}
		
		do_action( 'ava_after_main_title' );
	?>

		<div id="archive-post-list" class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container template-blog '>

				<main class='content <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content','post_type'=>'post'));?>>

                    <div class="category-term-description">
                        <?php echo term_description(); ?>
                    </div>

                    <?php
                    $avia_config['blog_style'] = apply_filters('avf_blog_style', avia_get_option('blog_style','multi-big'), 'archive');
                    if($avia_config['blog_style'] == 'blog-grid')
                    {
                        global $posts;
                        $post_ids = array();
                        foreach($posts as $post) $post_ids[] = $post->ID;

                        if(!empty($post_ids))
                        {
                            $atts   = array(
                                'type' => 'grid',
                                'items' => get_option('posts_per_page'),
                                'columns' => 3,
                                'class' => 'avia-builder-el-no-sibling',
                                'paginate' => 'yes',
                                'use_main_query_pagination' => 'yes',
                                'custom_query' => array( 'post__in'=>$post_ids, 'post_type'=>get_post_types() )
                            );

                            $blog = new avia_post_slider($atts);
                            $blog->query_entries();
                            echo "<div class='entry-content-wrapper'>".$blog->html()."</div>";
                        }
                        else
                        {
                            get_template_part( 'includes/loop', 'index' );
                        }
                    }
                    else
                    {
                        /* Run the loop to output the posts.
                        * If you want to overload this in a child theme then include a file
                        * called loop-index.php and that will be used instead.
                        */

                        $more = 0;
                        get_template_part( 'includes/loop', 'index' );
                    }
                    ?>

				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'blog';
				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->

	<div id="av-layout-grid-3" class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-9  el_after_av_layout_row  avia-builder-el-last  submenu-not-first container_wrap fullsize">
<div class="flex_cell no_margin av_one_full  avia-builder-el-10  avia-builder-el-no-sibling   " style="vertical-align:top; padding:0px 0px 20px 0px ; "><div class="flex_cell_inner">
<div class="avia-image-container  av-styling-   avia-builder-el-11  avia-builder-el-no-sibling  avia-align-center " itemscope="itemscope" itemtype="https://schema.org/ImageObject"><div class="avia-image-container-inner"><img class="avia_image " src="http://localhost/tasmania/wp-content/uploads/2015/09/ad01.jpg" alt="" title="ad01" itemprop="contentURL"></div></div>
</div></div>
</div>


<?php get_footer(); ?>
