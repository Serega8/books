<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Admin {
           
	public function action_index()
	{
            $content = View::factory('admin/main/v_main_admin');
            
            $this->template->page_title = 'Главная';
            $this->template->block_center = array($content);
	}
        
        
}


