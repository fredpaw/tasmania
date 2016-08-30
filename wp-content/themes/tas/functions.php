<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

/** Add social media **/


/** Footer Plugin **/
class footerColumn1 extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 1 Widget');
	}
	
	function widget() {
		?>
		<p class="text-center"><img class="image-half-size" src="<?php bloginfo('template_url');?>/images/mianzeshengming.svg" /></p>
		<p class="text-size-18 text-center"><a href="#">免责声明</a></p>
		<?php
	}
}

class footerColumn2 extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 2 Widget');
	}
	
	function widget() {
		?>
		<p class="text-center"><a href="<?php bloginfo('url')?>/links/"><img class="image-half-size" src="<?php bloginfo('template_url');?>/images/zhongyaolianjie.svg" /></a></p>
		<p class="text-size-18 text-center"><a href="<?php bloginfo('url')?>/links/">重要链接</a></p>
		<?php
	}
}

class footerColumn3 extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 3 Widget');
	}
	
	function widget() {
		?>
		<p class="text-center"><img class="image-half-size" src="<?php bloginfo('template_url');?>/images/wangzhanditu.svg" /></p>
		<p class="text-size-18 text-center"><a href="#">网站地图</a></p>
		<?php
	}
}

class footerColumn4 extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 4 Widget');
	}
	
	function widget() {
		?>
		<p class="text-center"><a href="<?php bloginfo('url');?>/store"><img class="image-half-size" src="<?php bloginfo('template_url');?>/images/shangcheng.svg" /></a></p>
		<p class="text-size-18 text-center"><a href="<?php bloginfo('url');?>/store">塔斯马尼亚商城</a></p>
		<?php
	}
}

class footerColumn5 extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 5 Widget');
	}
	
	function widget() {
		?>
		<p class="text-center"><img class="image-half-size" src="<?php bloginfo('template_url');?>/images/weishangjiameng.svg" /></p>
		<p class="text-size-18 text-center"><a href="#">微商加盟</a></p>
		<?php
	}
}

function footerColumn_register_widgets() {
	register_widget('footerColumn1');
	register_widget('footerColumn2');
	register_widget('footerColumn3');
	register_widget('footerColumn4');
	register_widget('footerColumn5');
}

add_action('widgets_init','footerColumn_register_widgets');

/** Scripts Registration **/
function tas_scripts() {
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'tas_scripts' );
