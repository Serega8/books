<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_News extends Controller_Widgets {
    
        public $template = 'widgets/w_news';
        
	public function action_index()
	{
            // Получаем список категорий
            $all_news = ORM::factory('New')->order_by('id', 'DESC')->limit(3)->find_all();
//            $all_news = ORM::factory('New');
            $this->template->all_news = $all_news;
	}
        
        
}


