<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu extends Controller_Widgets {
    
        public $template = 'widgets/w_menu';
        
	public function action_index()
	{
            $categories = Model::factory('Catalog')->categories();
            $this->template->categories = $categories;
	}
        
        
}


