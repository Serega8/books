<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_News extends Controller_Index {
           
	public function action_index()
	{
          $content = View::factory('index/news/v_news_index');
            
            $this->template->page_title = 'Новости';
            $this->template->block_center = array($content);
            $this->template->block_left = NULL;
            $this->template->block_right = NULL;
	}
    
}


