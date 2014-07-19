<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin {
         
	public function action_index()
	{
            $submenu = Widget::load('Menusettings');
                $content = View::factory('admin/settings/v_settings_admin', array(
                    'submenu' => $submenu,
                ));
            
            $this->template->page_title = 'Настройки';
            $this->template->block_center = array($content);
	}
        
        
}


