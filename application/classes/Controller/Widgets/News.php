<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_News extends Controller_Widgets {
    
        public $template = 'widgets/w_news';
        
	public function action_index()
	{
            $news = Model::factory('News')->all_news();
            $this->template->news = $news;
	}
        
        
}


