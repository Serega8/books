<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_News extends Controller_Index {
    
        public function before() {
            parent::before();
            $this->template->block_right = NULL;
        }
           
	public function action_index()
	{
            $all_news = Model::factory('News')->get_news();
            $content = View::factory('index/news/v_news_index', array(
                'all_news' => $all_news,
            ));
            
            $this->template->page_title = 'Новости магазина';
            $this->template->block_center = array($content);
	}
        
        public function action_get()
        {
            $id = (int) $this->request->param('id');
            $news = Model::factory('News')->get_one_news($id);
            $content = View::factory('index/news/v_news_index', array(
                'news' => $news,
            ));
            $this->template->page_title = HTML::anchor('news')."&rarr;".$news['title'];
            $this->template->block_center = array($content);
        }
}


