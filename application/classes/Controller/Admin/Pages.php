<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin {
           
	public function action_index()
	{
            $content = View::factory('admin/pages/v_pages_admin');
            
            $this->template->page_title = 'Страницы';
            $this->template->block_center = array($content);
            $this->template->block_left = NULL;
            $this->template->block_right = NULL;
	}
        
        
}


