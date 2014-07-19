<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin {
           
	public function action_index()
	{
            $content = View::factory('admin/users/v_users_admin');
            
            $this->template->page_title = 'Пользователи';
            $this->template->block_center = array($content);
            $this->template->block_left = NULL;
            $this->template->block_right = NULL;
	}
        
        
}


