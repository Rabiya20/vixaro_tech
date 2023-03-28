<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TF_Controller extends CI_Controller{	
	function __construct(){
        defined('ASSETS')      		  OR define('ASSETS', base_url('assets/web/')); 
		defined('ASSETS_IMAGES')      OR define('ASSETS_IMAGES', base_url('assets/web/images/')); 
		defined('ASSETS_CSS')      	  OR define('ASSETS_CSS', base_url('assets/web/css/')); 
		defined('ASSETS_JS')      	  OR define('ASSETS_JS', base_url('assets/web/js/'));
		
		// app assets source
		defined('B_APP_ASSETS')      		 OR define('B_APP_ASSETS', base_url('assets/bapp/')); 
		defined('B_APP_ASSETS_IMAGES')       OR define('B_APP_ASSETS_IMAGES', base_url('assets/bapp/images/')); 
		defined('B_APP_ASSETS_CSS')      	 OR define('B_APP_ASSETS_CSS', base_url('assets/bapp/css/')); 
		defined('B_APP_ASSETS_JS')      	 OR define('B_APP_ASSETS_JS', base_url('assets/bapp/js/'));
		defined('B_APP_ASSETS_VIDEOS')   	 OR define('B_APP_ASSETS_VIDEOS', base_url('assets/bapp/video/'));
		
        
        
        // $this->load->view('template/header');
        // $this->load->view('website/home');
        // $this->load->view('template/footer');
    }
}
