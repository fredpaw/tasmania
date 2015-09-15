
<p class='entry-content' style="font-size:18px;"><strong><?php _e('没有找到相应页面', 'avia_framework'); ?></strong><br/></p>
<br/>
<p><?php _e('你要找的页面不存在，请进行搜索', 'avia_framework'); ?></p>
<br/>
<?php

		if(isset($_GET['post_type']) && $_GET['post_type'] == 'product' && function_exists('get_product_search_form'))
		{
			get_product_search_form();
		}
		else
		{
			get_search_form();
		}

?>



<div class='hr_invisible'></div>
<br/>
<br/>
<section class="404_recommendation">
    
    <div class='hr_invisible'></div>

    <h3 style="font-weight:normal;font-size:18px;"><a href="<?php bloginfo('url');?>" style="text-decoration:underline;">返回首页</a></h3>

    
</section>
