<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin {
         
	public function before() {
        
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('Menusettings');
    }

    public function action_index() {

        $content = View::factory('admin/settings/v_settings_admin');

        // Вывод в шаблон
        $this->template->page_title = 'Настройки';
        $this->template->block_center = array($content);
    }
        
        
}


