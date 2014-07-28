<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menuadmin extends Controller_Widgets {
    
        public $template = 'widgets/w_menuadmin';
        
	public function action_index()
	{
            $select = Request::initial()->controller();
            
            $menu = array(
                'Главная' => array('Main'),
                'Заказы' => array('Orders'),
                'Страницы' => array('Pages', 'News', 'Articles'),
                'Товары' => array('Products'),
                'Пользователи' => array('Users'),
                'Настройки' => array('Settings'),
            );
            
            $this->template->menu = $menu;
            $this->template->select = $select;
        }
        
        
}


