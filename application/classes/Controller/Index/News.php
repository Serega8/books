<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_News extends Controller_Index {
    
        public function before() {
            parent::before();
            $this->template->block_right = NULL;
        }
           
	public function action_index()
	{
            $all_news = Model::factory('New')->order_by('id', 'DESC')->find_all();
            $content = View::factory('index/news/v_news_index', array(
                'all_news' => $all_news,
            ));
             
            $this->template->title = 'Новости';
            $this->template->page_title = 'Новости магазина';
            $this->template->block_center = array($content);
	}
        
        public function action_get()
        {
            $id = (int) $this->request->param('id');
            $news = ORM::factory('new', $id);
            
            if(!$news->loaded()){
                $this->redirect('admin/news');
            }
            
            $content = View::factory('index/news/v_news_get', array(
                'news' => $news,
            ));
            // Выводим в шаблон
            $this->template->title = $news->title;
            $this->template->page_title = HTML::anchor('news', 'Новости') . " &rarr; ".  $news->title;
            //$this->template->page_title = HTML::anchor('news')."&rarr;".$news['title'];
            $this->template->block_center = array($content);
        }
}


