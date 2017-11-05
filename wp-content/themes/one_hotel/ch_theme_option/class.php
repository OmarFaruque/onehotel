<?php
/*
* Save & Read Data theme option
*/

class ch_options{
	/*
	* replace white space & delete unnecessary words
	*/
	public function dt_string($data){
		return str_replace(' ', '_', strtolower($data));
	}

	/*
	* Save Data to database
	*/
	public function ch_save_option($post){
		$db_ch_option = get_option( 'ch_options');
		if(empty($db_ch_option) || !is_array($db_ch_option)){
			add_option( 'ch_options', $post, '', 'yes' );
		}else{
			update_option( 'ch_options', $post );
		}
	}

	/*
	* Read data 
	*/
	public function ch_get_option($dataroot){
		$db_ch_option = get_option('ch_options');
		$str_replaData = $this->dt_string($dataroot);
			return $db_ch_option[$str_replaData];	
	}
}
