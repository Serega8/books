<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Base {
    
    public $template = 'admin/v_base';
    
        public function before() {
            parent::before();
            
            $menu_admin = Widget::load('Menuadmin');
            
            $this->template->styles[] = 'media/css/style.css';
            $this->template->styles[] = 'media/css/style_admin.css';
            $this->template->menu_admin = $menu_admin;
        }

        
}


