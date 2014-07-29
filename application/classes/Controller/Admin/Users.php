<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin {
           
	public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('Menuusers');
    }

    public function action_index() {

        $content = View::factory('admin/users/v_users_admin');

        // Вывод в шаблон
        $this->template->page_title = 'Пользователи';
        $this->template->block_center = array($content);
    }
        
        
}


