<?php
/*
 * heme Panel
 */
function testAjaxLoadScripts() {
	// make the ajaxurl var available to the above script
	wp_enqueue_script("ajax-test", plugin_dir_url(__FILE__) . '/ch_ajax.js', array('jquery'));
	wp_localize_script('ajax-test', 'the_ajax_script', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_print_scripts', 'testAjaxLoadScripts');
/*
 * Serialize Data Processing
 */
function textAjaxProcessRequest() {
	// first check if data is being sent and that it is the data we want
	if (isset($_POST["order"])) {
		// now set our response var equal to that of the POST var (this will need to be sanitized based on what you're doing with with it)
		$order_database = get_option('ch_admin_order');
		$empty = 'start';
		if (!$order_database) {
			add_option('ch_admin_order', serialize($_POST['order']), '', 'yes');
		} else {
			update_option('ch_admin_order', serialize($_POST['order']));
		}
		//serialize($_POST['order']));
		echo 'success';
	}
	die();
}
add_action('wp_ajax_textAjaxProcessRequest', 'textAjaxProcessRequest');
add_action('wp_ajax_nopriv_textAjaxProcessRequest', 'textAjaxProcessRequest');
/*
 * post Form Data Processing
 */
function postAjaxCHaction() {
	$getTheme_option = unserialize(get_option('ch_theme_option'));
	$ex = explode('&', $_POST['postdata']);
	$vars = array();
	foreach ($ex as $x) {
		$nv = explode("=", $x);
		$name = urldecode($nv[0]);
		$value = urldecode($nv[1]);
		$vars[$name] = $value;
	}
	echo '<pre>';
	print_r($vars);
	echo '</pre>';
	die();
}
add_action('wp_ajax_postAjaxCHaction', 'postAjaxCHaction');
add_action('wp_ajax_nopriv_postAjaxCHaction', 'postAjaxCHaction');
if (!function_exists('sympleAdminPanel')) {
	/** Register symple admin panel. */
	add_action('admin_menu', 'sympleAdminMenu');
	function sympleAdminMenu() {
		//add_menu_page('My Page Title', 'My Menu Title', 'manage_options', 'my-menu', 'my_menu_output' );
		add_menu_page('Theme Settings', 'CH Admin Panel', 'manage_options', 'theme-panel-settings', 'sympleAdminPanel', plugin_dir_url(__FILE__) . 'img/settings.png');
	}
	function sympleAdminPanel() {

		if (isset($_POST['submit'])) {
			unset($_POST['submit']);
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';
			$getTheme_option = unserialize(get_option('ch_theme_option'));
			if (!is_array($getTheme_option)) {
				add_option('ch_theme_option', serialize($_POST), '', 'yes');
			} else {
				echo 'true';
				update_option('ch_theme_option', serialize($_POST));
			}
		}
		$order = unserialize(get_option('ch_admin_order'));
		echo 'order: <br/>';
		echo '<pre>';
		print_r($order);
		echo '</pre>';
		echo 'data: <br/>';
		$fgetTheme_option = unserialize(get_option('ch_theme_option'));
		echo '<pre>';
		print_r($fgetTheme_option);
		echo '</pre>';
		$post = serialize($_POST);
		$ch_theme_option = get_option('ch_theme_option');
		/*echo 'count items: ' . count($ch_theme_option['ch_theme']) . '<br/>';
		echo ($ch_theme_option);
		echo '<pre>';
		print_r($ch_theme_option['ch_theme']);
		echo '</pre>';*/
		?>
<div class="wrap">
	<div class="ajaxResult">
	</div>
	<h1>Settings</h1><br/>
	<form  id="ch_themesetting" method="post">
		<div id="ch_theme_panel">
			<div class="left">
				<ul>
					<li><a href="#theme_option_ui">Theme Option UI</a></li>
					<li><a href="#export;">Export</a></li>
					<li><a href="#import;">Import</a></li>
				</ul>
			</div>
			<div class="right">
				<div class="section_setting_field">
					<ul id="sortable">
						<?php
if (count($ch_theme_option['ch_theme']) <= 0) {
			?>
						<li class="section-item item_head">
							<div class="open">General</div>
							<div class="button_section">
								<a href="javascript:void(0)" class="edit button button-edit">
									<span alt="f464" class="dashicons dashicons-edit"></span>
								</a>
								<a href="javascript:void(0)" class="delete button button-delete">
									<span alt="f182" class="dashicons dashicons-trash"></span>
								</a>
							</div>
							<div class="theme_setting_body">
								<div class="single_body_item">
									<div class="body_left">
										<input type="text" name="ch_theme[item][0][title]" value="" placeholder="General">
									</div>
									<div class="body_info">
										<span><b>Section Title:</b> Display as a menu item on the Theme Options page.</span>
									</div>
								</div>
								<div class="single_body_item">
									<div class="body_left">
										<input type="text" readonly name="ch_theme[item][0][id]" value="" placeholder="general">
									</div>
									<div class="body_info">
										<span><b>Section ID:</b> A unique lower case alphanumeric string, underscores allowed.</span>
									</div>
								</div>
							</div>
						</li>
						<?php } else {
			$s_count = 1;
			// $ch_theme_option['ch_theme']
			foreach ($order as $s_order):
				//unset($single_item['item']);
				$explod_order = explode('=', $s_order);
				$exitem = $explod_order[1];
				$exSerial = $explod_order[0];
				if (!empty($fgetTheme_option['ch_theme']['' . $explod_order[1] . ''][$explod_order[0]]['title'])) {
					?>
										<li data-item="<?=$explod_order[1];?>" data-short="<?=$s_count;?>" class="section-item <?=($explod_order[1] == 'item') ? 'item_head' : 'section_head';?>">
											<div class="open"><?=ucwords(str_replace('_', ' ', $fgetTheme_option['ch_theme']['' . $explod_order[1] . ''][$explod_order[0]]['title']));?></div>
											<div class="button_section">
												<a href="javascript:void(0)" class="edit button button-edit">
													<span alt="f464" class="dashicons dashicons-edit"></span>
												</a>
												<a href="javascript:void(0)" class="delete button button-delete">
													<span alt="f182" class="dashicons dashicons-trash"></span>
												</a>
											</div>
											<div class="theme_setting_body">
												<div class="single_body_item">
													<div class="body_left">
														<input type="text" name="ch_theme[<?=$exitem;?>][<?=$s_count;?>]['title']" value="<?=ucwords(str_replace('_', ' ', $fgetTheme_option['ch_theme'][$exitem][$exSerial]['title']));?>" placeholder="">
													</div>
													<div class="body_info">
														<span><b>Section Title:</b> Display as a menu item on the Theme Options page.</span>
													</div>
												</div>
												<div class="single_body_item">
													<div class="body_left">
														<input type="text" readonly name="ch_theme[<?=$exitem;?>][<?=$s_count;?>]['id']" value="<?=$fgetTheme_option['ch_theme'][$exitem][$exSerial]['id'];?>" placeholder="">
													</div>
													<div class="body_info">
														<span><b>Section ID:</b> A unique lower case alphanumeric string, underscores allowed.</span>
													</div>
												</div>
											</div>
										</li>
										<?php
	}
				$s_count += 1;
			endforeach;}?>
					</ul>
				</div>
				<hr/>
				<a class="button button-default" id="add_item" href="#" role="button">Add Item</a>
				<a class="button button-default" id="add_section" href="#" role="button">Add Secton</a>
				<a class="button button-default" id="add_setting" href="#" role="button">Add Setting</a>
				<?php submit_button();?>
			</div>
		</div>
	</form>
</div>
<?php }
}