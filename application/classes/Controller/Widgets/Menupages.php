<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menupages extends Controller_Widgets {
    
        public $template = 'widgets/w_menupages';
        
	public function action_index()
	{
            $select = Request::initial()->controller();
            $menu = array(
                'Страницы' => array('Pages'),
                'Новости' => array('News'),
                'Статьи' => array('Articles'),
            );
            
            $this->template->menu = $menu;
            $this->template->select = $select;
	}
        
        
}


