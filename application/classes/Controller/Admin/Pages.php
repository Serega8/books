<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin {
           
	public function action_index()
	{
            $submenu = Widget::load('Menupages');
                $content = View::factory('admin/pages/v_pages_admin', array(
                    'submenu' => $submenu,
                ));
            
            $this->template->page_title = 'Страницы';
            $this->template->block_center = array($content);
	}
        
        
}


