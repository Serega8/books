<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu extends Controller_Widgets {
    
        public $template = 'widgets/w_menu';
        
	public function action_index()
	{
            $select = Request::initial()->param('cat');
             // Получаем список категорий
            //$categories = Model::factory('Catalog')->categories();
            $categories = ORM::factory('Category')->find_all();
            $this->template->categories = $categories;
            $this->template->select = $select;
	}
        
        
}


