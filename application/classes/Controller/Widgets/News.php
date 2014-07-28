<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_News extends Controller_Widgets {
    
        public $template = 'widgets/w_news';
        
	public function action_index()
	{
            $all_news = Model::factory('New')->get_news(3); ///limit = 3
            $this->template->all_news = $all_news;
	}
        
        
}


