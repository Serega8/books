<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin {
           
	public function action_index()
	{
            
            $submenu = Widget::load('Menuusers');
            $content = View::factory('admin/users/v_users_admin', array(
                'submenu' => $submenu,
            ));
            
            $this->template->page_title = 'Пользователи';
            $this->template->block_center = array($content);
	}
        
        
}


