<?php
/*
* Ch Theme Option Framework
*/
// Admin Theme Function
ob_start();
require_once('class.php');
require_once('function_part/dynamic_css.php');

if(!function_exists('ch_get_option')){
	function ch_get_option($data){
		$ch_o = new ch_options;
		return $ch_o->ch_get_option($data);
	}
}

function addThemeMenuItem() {
	//add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
	add_submenu_page('themes.php', "Theme Option", "Theme Option", "manage_options", "theme-panel", "themeSettingsPage", null, 99);
}
// Logo Uplode
function wpGearManagerAdminScripts() {
	// function for upload script
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('jquery');
	// wp_enqueue_script( 'my-script-handle', plugins_url('my-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	if (isset($_GET['page'])) {
		if ($_GET['page'] == 'theme-panel' || $_GET['page'] == 'theme-panel-settings') {
			wp_enqueue_script('codeHouseThemeOptionsjs', get_template_directory_uri() . '/ch_theme_option/js/code_house_adminPanel.js', array('wp-color-picker'), false, true);
			wp_enqueue_media();
		}
	}
}
function wpGearManagerAdminStyles() {
	//  function for upload style
	wp_enqueue_style('thickbox');
	wp_enqueue_style('customThemeStyle', get_template_directory_uri() . '/ch_theme_option/css/admin-function.css');
	wp_enqueue_style('wp-color-picker');
}
add_action('admin_print_scripts', 'wpGearManagerAdminScripts');
add_action('admin_print_styles', 'wpGearManagerAdminStyles');
add_action("admin_menu", "addThemeMenuItem");
function themeSettingsPage() {
	$ch = new ch_options;
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$ch->ch_save_option($_POST);
	}
?>
<div class="wrap">
	<form method="post" action="">
		<?php
		settings_fields("section");
		do_settings_sections("theme-options");
		$itemArray = array(
		'general' => array(
			'branding' => array(
				array(
					'title' => 'logo',
					'note' => 'Add a Custom Logo from your Media Library',
					'type' => 'upload'
				),
				array(
					'title' => 'Favicon',
					'note' => 'Add a 16px x 16px Png/Gif image that will represent your website\'s favicon.',
					'type' => 'upload'
				),
				array(
					'title' => 'Custom Login Logo',
					'note' => 'Add a custom logo for the Wordpress login screen.',
					'type' => 'upload'
				),
				array(
					'title'	=> 'Contact Number',
					'note'	=> 	'add mobile number or phone number',
					'type'	=> 	'text'
				),
				array(
					'title'	=> 	'Email',
					'note'	=> 	'Email address for visitor contact',
					'type'	=> 	'email'
				)
			),
			'Social Links' 	=> array(
					array(
					'title'	=>	'Facebook Link',
					'note'	=> 	'Use facebook page link',
					'type'	=> 	'text'	
					),
					array(
					'title'	=>	'Google Plus',
					'note'	=> 	'Use Google Plus page link',
					'type'	=> 	'text'	
					),
					array(
					'title'	=>	'Twitter Link',
					'note'	=> 	'Use Twitter page link',
					'type'	=> 	'text'	
					),
					array(
					'title'	=>	'Youtube Link',
					'note'	=> 	'Use Youtube Profile link',
					'type'	=> 	'text'	
					),
					array(
					'title'	=>	'Instagram Link',
					'note'	=> 	'Use Instagram profile link',
					'type'	=> 	'text'	
					)
			),
			'footer' => array(
				array(
					'title' => 'Back to Top',
					'note' => 'Display the back to top button.',
					'type' => 'checkbox',
					'checkbox_value' => array('yes', 'no'),
				),
				array(
					'title' => 'Footer (Copyright)',
					'note' => 'Write your Copyright infos.',
					'type' => 'text'
				),
				array(
					'title' => 'Tracking Code',
					'note' => 'Paste your Google analytics (or other) code here.',
					'type' => 'textarea',
				),
			),
		),
		'styling' => array(
			'layout' => array(
				array(
					'title' => 'Layout Color Style',
					'note' => 'Choose your Layout Style.',
					'type' => 'dropdown',
					'dropdown_value' => array('light', 'dark'),
				),
				array(
					'title' => 'Main Color',
					'note' => 'Please make sure that you use a correct color code.',
					'type' => 'color_picker',
				),
				array(
					'title' => 'Text Color for Main Colored Background',
					'note' => 'Choose your color style for all content/objects that have your main color as background. ',
					'type' => 'color_picker',
				),
				array(
					'title' => 'Direction for Animation',
					'note' => 'Choose the direction for the animation.',
					'type' => 'radio',
					'nature' => 'animation',
					'radio_value' => array('left', 'right'),
				),
			),
			'template layout' => array(
				array(
					'title' => 'Blog Layout ',
					'note' => 'Choose your blog template style',
					'type' => 'radio',
					'nature' => 'layout_style',
					'radio_value' => array('left', 'right', 'no'),
					'extra_input' => 'widget-list',
				),
				array(
					'title' => 'Home Layout',
					'note' => 'Choose your Home template style',
					'type' => 'radio',
					'nature' => 'layout_style',
					'radio_value' => array('left', 'right', 'no'),
					'extra_input' => 'widget-list',
				),
				array(
					'title' => 'Portfolio Layout ',
					'note' => 'Choose your Portfolio Page style',
					'type' => 'radio',
					'nature' => 'layout_style',
					'radio_value' => array('left', 'right', 'no'),
					'extra_input' => 'widget-list',
				),
				array(
					'title' => 'Fixed Footer Position',
					'note' => 'Display the back to top button.',
					'type' => 'checkbox',
					'checkbox_value' => array('yes', 'no'),
				),
			),
		),
		'google settings' => array(
			'all google settings' => array(
				array(
					'title'	=> 	'Google analytics',
					'note'	=> 	'Just put google analytics id',
					'type'	=> 	'text',
					)
				)
		)
		//'styling', 'blog', 'portfolio', 'layout', 'colors', 'fonts', 'social'
		);
		?>
		<?php
		/*
		echo '<pre>';
			print_r($itemArray);
		echo '</pre>';*/
		;?>
		<div class="themeOption">
			<div class="leftManu">
				<div class="topbar logotop">
					<div class="icon">
						<img src="<?=get_template_directory_uri();?>/ch_theme_option/img/1462632628_Settings.png" alt="setting icon"/>
					</div>
					<div class="Logotitle">
						<h3><span style="color:red;">Theme</span><span>Options</span></h3>
						<span class="themeoption_powerBy">Powered by Code House</span>
					</div>
				</div>
				<div class="ThOleftMenuItem">
					<ul>
						<?php foreach ($itemArray as $key => $tab): ?>
						<li><a href="#<?=str_replace(' ', '_', $key);?>"><?=ucfirst($key);?></a></li>
						<?php endforeach;?>
					</ul>
				</div>
			</div>
			<div class="themeOptionBody">
				<div class="topbar bodytop">
					<h3><span class="topTitle">General</span></h3>
					<?php submit_button();?>
				</div>
				<?php foreach ($itemArray as $key => $mainBody): ?>
				<div class="ThOMainBody" id="<?=str_replace(' ', '_', $key);?>">
					<?php foreach ($mainBody as $mainKey => $singBody): ?>
					<div class="section">
						<div class="sectionhead">
							<h3><?=$mainKey;?></h3>
						</div>
						<div class="sectionbody">
							<?php for ($i = 0; $i < count($singBody); $i += 1): ?>
							<div class="sectionPart">
								<label for="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>"><h4><?=$singBody[$i]['title'];?></h4></label>
								<?php
								switch ($singBody[$i]['type']):
								case 'upload':
								?>
								<div class="partRight">
									<input type="text" value="<?= $ch->ch_get_option($singBody[$i]['title']); ?>" name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>"/>
									<button class="button button-submit add-image">Add Image</button>
								</div>
								<?php
								break;
								case 'checkbox':
								?>
								<div class="partRight">
									<input type="checkbox" style="display: none;" value="" name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>"/>
									<a href="#"  class="checkbox-status">Checkbox</a>
								</div>
								<?php
								break;
								case 'email': 
								?>
								<div class="partRight">
									<input type="email" style="width:99%;" value="<?= $ch->ch_get_option($singBody[$i]['title']); ?>" name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>"/>
								</div>
								<?php
								break;
								case 'text':
								?>
								<div class="partRight">
									<input type="text" style="width:99%;" value="<?= $ch->ch_get_option($singBody[$i]['title']); ?>" name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>"/>
								</div>
								<?php
								break;
								case 'textarea':
								?>
								<div class="partRight">
									<textarea name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>"><?= $ch->ch_get_option($singBody[$i]['title']); ?></textarea>
								</div>
								<?php
								break;
								
								case 'dropdown':
								?>
								<div class="partRight">
									<select name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>">
										<option value="">Select <?=$singBody[$i]['title'];?> </option>
										<?php foreach ($singBody[$i]['dropdown_value'] as $singleDropdown): ?>
										<option value="<?=strtolower($singleDropdown);?>"><?=ucfirst($singleDropdown);?></option>
										<?php endforeach;?>
									</select>
								</div>
								<?php
								break;
								case 'color_picker':
								?>
								<div class="partRight">
									<input type="text" class="codeHouseColorPicker" value="" name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" id="id-<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>">
								</div>
								<?php
								break;
								case 'radio':
								?>
								<div class="partRight animationDiv">
									<?php foreach ($singBody[$i]['radio_value'] as $radioVal): ?>
									<input style="display:none;" name="<?=str_replace(' ', '_', strtolower($singBody[$i]['title']));?>" type="radio" class="" value="<?=$radioVal;?>">
									<a href="javascript:void(0)" class="radio-status <?php if ($singBody[$i]['nature'] == 'layout_style') {echo 'sidebar';} elseif ($singBody[$i]['nature'] == 'animation') {echo 'animation';}?> <?=$radioVal;?>" title="<?=$radioVal;?>"><?=$radioVal;?></a>
									<?php endforeach;?>
								</div>
								<?php
								break;
								?>
								<?php endswitch;?>
								<div class="imgPreview">
									<span><i><?=$singBody[$i]['note'];?></i></span>
									<div class="img">
									<?php
										if($singBody[$i]['type'] == 'upload' && !empty($ch->ch_get_option($singBody[$i]['title']))){
											echo '<img src="'.$ch->ch_get_option($singBody[$i]['title']).'"/>';
										}
									?>
									</div>
								</div>
							</div>
							<?php endfor;?>
						</div>
					</div>
					<?php endforeach;?>
				</div>
				<?php endforeach;?>
				<div class="ThOMainBody" id="blog">
					<span>Generalddd</span>
				</div>
			</div>
		</div>
		<?php
		submit_button();
		?>
	</form>
</div>
<?php
}
ob_end_clean();
?>