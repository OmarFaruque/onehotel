<?php
/*
* Plugin Name: CH Fade Slider
* Author: Omar Faruque
* Author URL: http://aboutdhaka.com/
* Description: This plugin for symple admin panel like logo, social links, custom css, custom js etc.
* Version: 1.0
* Licence: CH_FADE_SLIDER
* Text Domain: ch_fade_slider
*/
// Admin Theme Function
// ‍Admin file include
require_once('ch_admin.php');
if(!function_exists('ch_fade_slider_front')){
function ch_fade_slider_front(){ ?>
<div class="bannercontainer">
	<div class="banner">
		<ul>
			<!-- Slide 1 -->
			<?php
				$ch_sliders = get_option('ch_fade_slider');
				for($ch_c = 0; count($ch_sliders['ch_slider_input_img_id']) > $ch_c; $ch_c++):
					$alt = get_post_meta($ch_sliders['ch_slider_input_img_id'][$ch_c], '_wp_attachment_image_alt', true);
			?>
			<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
				<!-- Main Image -->
				<img src="<?= wp_get_attachment_url( $ch_sliders['ch_slider_input_img_id'][$ch_c] ); ?>" style="opacity:0;" alt="<?= $alt; ?>"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat">
				<!-- Layers -->
				<!-- Layer 1 -->
				<div class="caption sft revolution-starhotel bigtext"
					data-x="205"
					data-y="30"
					data-speed="700"
					data-start="1700"
					data-easing="easeOutBack">
					<span>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
					&nbsp;<?= $ch_sliders['s_title'][$ch_c]; ?>&nbsp;
					<span>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</div>
				<!-- Layer 2 -->
				<!-- <div class="caption sft revolution-starhotel smalltext"
							data-x="405"
							data-y="105"
							data-speed="800"
							data-start="1700"
							data-easing="easeOutBack">
					<span>And we like to keep it that way!</span></div>-->
					<!-- Layer 3 -->
					<div class="caption sft"
						data-x="575"
						data-y="100"
						data-speed="1000"
						data-start="1900"
						data-easing="easeOutBack">
						<a href="<?= ( $ch_sliders['s_button_link'][$ch_c] != '' )? $ch_sliders['s_button_link'][$ch_c] : get_home_url( '/' ); ?>" class="button btn btn-olive btn-lg"><?= $ch_sliders['s_button_text'][$ch_c]; ?></a>
					</div>
				</li>
				<?php endfor; ?>
				<!-- Slide 2 -->
			</ul>
		</div>
	</div>
	<?php }
	add_shortcode( 'ch_fade_slider', 'ch_fade_slider_front' );
	}
	// FrontEnd Script
	function of_script() {
	wp_enqueue_script( 'revolution-tool',  plugin_dir_url( __FILE__ ) . 'ch_files/jquery.themepunch.tools.min.js'); // revolution-took
	wp_enqueue_script( 'revolution',  plugin_dir_url( __FILE__ ) . 'ch_files/jquery.themepunch.revolution.min.js'); // revolution
	wp_enqueue_script( 'ch-custm-script', plugin_dir_url( __FILE__ ) . 'ch_files/ch_custom_script.js'); // custom script
	wp_enqueue_style( 'of_style', plugin_dir_url(__FILE__) . 'ch_files/ch_style.css' ); // default style;
	wp_enqueue_style( 'fontawesome', plugin_dir_url(__FILE__) . 'ch_files/font-awesome.min.css' ); // FontAwesome min Stylesheet
	}
	add_action('wp_enqueue_scripts', 'of_script', 20 );