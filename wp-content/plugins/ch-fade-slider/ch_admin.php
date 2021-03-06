<?
// Admin Functions
// Admin Script
function ch_admin_script() {
	if(isset($_GET['page'])){
		if($_GET['page'] == 'ch_fade_slider'){
			/* Media Script */
			wp_enqueue_media();
			/* End Media Script */
			wp_enqueue_script('jquery-ui-sortable');
			wp_enqueue_script( 'admin_ch_script',  plugin_dir_url( __FILE__ ) . 'ch_files/admin/admin_ch_script.js');
			wp_localize_script( 'ajax_ch_slider', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
			wp_register_style( 'ch_wp_admin_css', plugin_dir_url(__FILE__) . 'ch_files/admin/admin_style.css', false, '1.0.0' );
			wp_enqueue_style( 'ch_wp_admin_css' );
		}
	}
	wp_enqueue_style('ch-global-css', plugin_dir_url(__FILE__ ) . 'ch_files/admin/ch_global.css');
}
add_action( 'admin_enqueue_scripts', 'ch_admin_script' );
// Admin Action
add_action( 'admin_menu', 'ch_slider_admin' );
function ch_slider_admin() {
$icon_url = plugin_dir_url( __FILE__) . 'ch_files/img/ch_icon_hover.png';
add_menu_page( 'CH Fade Slider', 'CH Fade Slider', 'manage_options', 'ch_fade_slider', 'ch_slider_option', $icon_url);
}
// Of slider Admin Option
function ch_slider_option(){
ob_start();
$of_sliders = get_option('ch_fade_slider');
/*echo '<pre>';
print_r($of_sliders);
echo '</pre>';*/
$icon_url_hover = plugin_dir_url( __FILE__) . 'ch_files/img/ch_icon_hover.png';
?>
<h1 class="admintitle">Fade Slider</h1>
<div class="wrap">
	<form method="POST" action="" id="ch_fade_slider">
		<div class="one-two">
			<table class="widefat fixed" cellspacing="0">
				<thead>
					<tr>
						<th>Slider Image</th>
						<th>Slider Title</th>
						<th>Slider Button Text</th>
						<th>Slider Button Link</th>
						<th>Visiable</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$numberSlider = count($of_sliders['ch_slider_input_img']);

					for($c = 0; $c < $numberSlider; $c++): ?>
					<tr>
						<td>
							<span class="img_prev"><img class="sliderImg" src="<?= $of_sliders['ch_slider_input_img'][$c]; ?>"/></span>
							<span class="hidden">
							<input required type="text" name="ch_slider_input_img[]" value="<?= $of_sliders['ch_slider_input_img'][$c]; ?>">
							<input type="hidden" name="ch_slider_input_img_id[]" value="<?= $of_sliders['ch_slider_input_img_id'][$c]; ?>" placeholder="">
							</span>
						</td>
						<td>
							<span class="text"><?= $of_sliders['s_title'][$c]; ?></span>
							<span class="input hidden">
								<input type="text" name="s_title[]" value="<?= $of_sliders['s_title'][$c]; ?>">
							</span>
						</td>
						<td>
							<span class="text"><?= $of_sliders['s_button_text'][$c]; ?></span>
							<span class="input hidden">
								<input type="text" name="s_button_text[]" value="<?= $of_sliders['s_button_text'][$c]; ?>">
							</span>
						</td>
						<td>
							<span class="text"><?= $of_sliders['s_button_link'][$c]; ?></span>
							<span class="input hidden">
								<input type="text" name="s_button_link[]" value="<?= $of_sliders['s_button_link'][$c]; ?>">
							</span>
						</td>
						<td>
							<a href="javascript:void(0)" data-endesable="<?= $c; ?>" class="readonly enableDesable"><?= ($of_sliders['s_visiable'][$c] == 0)?'<span class="desable">Desable</span>':'<span class="enable">Enable</span>'  ?></a>
							<span class="input">
								<input type="hidden" name="s_visiable[]" value="<?= $of_sliders['s_visiable'][$c]; ?>" >		
							</span>
						</td>
						<td>
							<a class="edit_slide" data-edit="<?= $c; ?>"  href="javascript:void(0)" >
								<div alt="f464" class="dashicons dashicons-edit"></div>
							</a>
							<a class="delete_slide" data-delete="<?= $c; ?>" href="javascript:void(0)">
								<div alt="f182" class="dashicons dashicons-trash"></div>
							</a>
						</td>
					</tr>
					<?php endfor;
					?>
					
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6" rowspan="" headers="">
							<i>Thank You for Using <b>Fade Slider</b>.&nbsp;&nbsp;&nbsp;  Mail me if you face any problem: <a class="mailme" href="mailto:ronymaha@gmail.com">ronymaha@gmail.com</a></i>
						</td>
					</tr>
				</tfoot>
			</table>
			<div class="addSlider">
				<a href="#" onClick="return false" alt="f502" class="dashicons dashicons-plus-alt pull-right"></a>
			</div>
			
			<div id="newSlider">
				<div class="newSliderWrap">
					
					<div class="title">
						<label for="s_title">Slider Title: </label>
						<input type="text" name="s_title[]" id="s_title" value="" />
					</div>
					<div class="buttonText">
						<label for="s_button_text">Button Label:</label>
						<input type="text" name="s_button_text[]" id="s_button_text" value="" />
					</div>
					<div class="button_link">
						<lable for="s_button_link">Button Link: </lable>
						<input type="text" name="s_button_link[]" id="s_button_link" value="" />
					</div>
					<div class="visiable">
						<p>Show Slider: </p>
						<lable><input type="radio" value="0" name="s_visiable[]" />No &nbsp;</lable>
						<lable><input type="radio" value="1" checked="checked" name="s_visiable[]" />Yes</lable>
					</div>
					<div class="uploader">
						<label for="ch_slider_input_img">Slider Image: </label>
						<input required id="ch_slider_input_img" name="ch_slider_input_img[]" type="text" value="" />
						<input type="hidden" id="ch_slider_input_img_id" name="ch_slider_input_img_id[]" value="" >
						<div class="previewch_slider"><img src="" /></div>
						<input id="ch_fade_slider_upload" class="button" name="ch_fade_slider_upload" type="button" value="Upload Image" />
					</div>
					<div class="submit_ch_sluder">
						<input onClick="return false;" type="submit" id="ch_slider_submit" name="ch_slider_submit" class="button" value="Save" />
					</div>
					<div class="errorShow"></div>
				</div>
			</div>
		</div>
		<div class="two-one instruciton">
			<div class="inst">
				<ul>
					<li><b>Add New Slider Item: </b>Click ( <span class="dashicons dashicons-plus-alt"></span> ) from bottm right corner.</li>
					<li><b>Edit Slider Item: </b>Click ( <span class="dashicons dashicons-edit"></span> ) from each slider item.</li>
					<li><b>Delete Slider Item: </b> Click ( <span class="dashicons dashicons-trash"></span> ) from each slider item.</li>
					<li><b>Change Order: </b> Drag & Drop each item for re-order / change order.</li>
					<li><b>Shortcode: </b> If you insert code to your php file you can copy past this: <i>&lt;?php echo do_shortcode('[ch_fade_slider]'); ?&gt;</i><br/><br/>If you like to add Slider from admin just copy past this code: "[ch_fade_slider]" (don't copy block quote)</li>
				</ul>
			</div>
		</div>
	</form>
</div>
<?php
//ob_end_clean();
}
/*****************************
END of_slider_option
***********************************/














/*****************************************************************
S T A R T   A J A X  C  A L L  B A C K   F U N C T I O N
*******************************************************************/
if(!function_exists('ch_slider_insert')) {
function ch_slider_insert(){
	
	// jQuery Post Data
	$formValues = array();
	parse_str($_POST['formVar'], $formValues);
	
	// Data Insert Process
	$ex_slider_db = get_option('ch_fade_slider');
	if(!is_array($ex_slider_db)){
		add_option( 'ch_fade_slider', $formValues, '', 'yes');
	}else{
		update_option( 'ch_fade_slider', $formValues );
	}
	$afterInsert = get_option('ch_fade_slider');
	echo 'insert success';
	
die();
}
// Add the ajax hooks for admin
add_action( 'wp_ajax_ch_slider_insert', 'ch_slider_insert' );
// Add the ajax hooks for front end
add_action( 'wp_ajax_nopriv_ch_slider_insert', 'ch_slider_insert' );
}




/*
* Delete Ajax Function 
*/
if(!function_exists('ch_slider_delete')){
	function ch_slider_delete(){
		$delete = $_POST['delete'];
		$ex_slider_db = get_option('ch_fade_slider');
		unset($ex_slider_db['ch_slider_input_img'][$delete]);
		$ex_slider_db['ch_slider_input_img'] = array_values($ex_slider_db['ch_slider_input_img']);

		unset($ex_slider_db['s_title'][$delete]);
		$ex_slider_db['s_title'] = array_values($ex_slider_db['s_title']);

		unset($ex_slider_db['s_button_text'][$delete]);
		$ex_slider_db['s_button_text'] = array_values($ex_slider_db['s_button_text']);

		unset($ex_slider_db['s_button_link'][$delete]);
		$ex_slider_db['s_button_link'] = array_values($ex_slider_db['s_button_link']);


		unset($ex_slider_db['s_visiable'][$delete]);
		$ex_slider_db['s_visiable'] = array_values($ex_slider_db['s_visiable']);

		unset($ex_slider_db['ch_slider_input_img_id'][$delete]);
		$ex_slider_db['ch_slider_input_img_id'] = array_values($ex_slider_db['ch_slider_input_img_id']);

		update_option( 'ch_fade_slider', $ex_slider_db );
		
		echo 'delete success';
		die();
	}
	add_action( 'wp_ajax_ch_slider_delete', 'ch_slider_delete' );
	
	// Add the ajax hooks for front end
	add_action( 'wp_ajax_nopriv_ch_slider_delete', 'ch_slider_delete' );
}




/*
* Edit Ajax Function 
*/

if(!function_exists('ch_slider_edit')){
	function ch_slider_edit(){
		unset($_POST['action']);
		$edit_id = $_POST['edit_id'];
		$slider = get_option('ch_fade_slider');
		$slider['ch_slider_input_img'][$edit_id] = $_POST['input_img'];
		$slider['ch_slider_input_img_id'][$edit_id] = $_POST['img_id'];
		$slider['s_title'][$edit_id] = $_POST['slider_title'];
		$slider['s_button_text'][$edit_id] = $_POST['s_button_text'];
		$slider['s_button_link'][$edit_id] = $_POST['s_button_link'];
		$slider['s_visiable'][$edit_id] = $_POST['s_visiable'];

		// update slider
		update_option( 'ch_fade_slider', $slider );
		echo 'success';
		die();
	}
	add_action( 'wp_ajax_ch_slider_edit', 'ch_slider_edit' );
	
	// Add the ajax hooks for front end
	add_action( 'wp_ajax_nopriv_ch_slider_edit', 'ch_slider_edit' );
}



/*
* Shortable Update Ajax Function 
*/
if(!function_exists('ch_update_shortable')) {
function ch_update_shortable(){
	
	// jQuery Post Data
	$formValues = array();
	parse_str($_POST['formVar'], $formValues);
	foreach($formValues as $k => $val){
		unset( $formValues[$k][count($val)-1] );
	}
	// Update Shorting Data
	$ex_slider_db = get_option('ch_fade_slider');
	if(!is_array($ex_slider_db)){
		add_option( 'ch_fade_slider', $formValues, '', 'yes');
	}else{
		update_option( 'ch_fade_slider', $formValues );
	}
	$afterInsert = get_option('ch_fade_slider');

	//echo json_encode($afterInsert);
	print_r($afterInsert);
	
die();
}
// Add the ajax hooks for admin
add_action( 'wp_ajax_ch_update_shortable', 'ch_update_shortable' );
// Add the ajax hooks for front end
add_action( 'wp_ajax_nopriv_ch_update_shortable', 'ch_update_shortable' );
}


/*****************************************************************
E N D   A J A X  C  A L L  B A C K   F U N C T I O N
********************************************************************/
?>