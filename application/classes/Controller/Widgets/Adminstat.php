<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Adminstat extends Controller_Widgets {
    
        public $template = 'widgets/w_adminstat';
        
	public function action_index()
	{
            $count['news'] = Model::factory('New')->count_all();
            $count['products'] = Model::factory('Product')->count_all();
            $this->template->count = $count;
	}
        
        
}


