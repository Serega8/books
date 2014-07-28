<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_News extends Controller_Admin {
           
	public function before()
        {
            parent::before();
            $this->template->submenu = Widget::load('Menupages');
            $this->template->page_title = 'Новости';
        }
        
	public function action_index()
	{
            $all_news = Model::factory('News')->get_news();
            $content = View::factory('admin/news/v_news_admin', array(
                'all_news' => $all_news,
            ));
            $this->template->block_center = array($content);
	}
        
        public function action_edit()
        {
            $id = (int) $this->request->param('id');
            $news = Model::factory('News')->get_one_news($id);
            $content = View::factory('admin/news/v_news_edit')
                ->bind('news', $news)
                ->bind('errors', $errors) // если вдруг переменной не будет, чтобы не было ошибки
                ->bind('post', $post);
            
            if(isset($_POST['submit']))
            {
                $post = Validation::factory($_POST);
                $post->rule('title', 'not_empty')
                 ->rule('title', 'min_length', array(':value', 3))
                 ->labels(array(
                     'title' => 'Название',
                 ));
                
                if($post->check())
                {
                    $news = Arr::extract($_POST, array('title', 'intro', 'content', 'date'));
                    Model::factory('News')->update_news(
                            $id, $news['title'], $news['intro'], $news['content'], $news['date']);
                    $this->redirect('admin/news/');
                }
            
                $errors = $post->errors('validation');
            }
            
            $this->template->block_center = array($content);
            $this->template->page_title .= ' :: Редактировать';
        }
        
              
        public function action_add() {
            
        if(isset($_POST['submit']))
        {
            ///modul validation
            $post = Validation::factory($_POST);
            $post->rule('title', 'not_empty')
                 ->rule('title', 'min_length', array(':value', 3))
                 ->labels(array(
                     'title' => 'Название',
                 ));
            
            if($post->check())
            {
                $news = Arr::extract($_POST, array('title', 'intro', 'content', 'date'));
                Model::factory('News')
                        ->add_news($news['title'], $news['intro'], $news['content'], $news['date']);
                $this->redirect('admin/news');
            }
            
            $errors = $post->errors('validation');
        }
            
        $content = View::factory('admin/news/v_news_add')
                ->bind('errors', $errors) // если вдруг переменной не будет, чтобы не было ошибки
                ->bind('post', $post);

        ///$news = Arr::extract($_POST, array('title', 'intro', 'content', 'date'));
        
//        if (isset($_POST['submit'])) {
//            Model::factory('News')->add_news($news['title'], $news['intro'], $news['content'], $news['date']);
//            $this->redirect('admin/news');
//        }

        // Вывод в шаблон
        $this->template->block_center = array($content);
        $this->template->page_title .= ' :: Добавить';
    }
        
        public function action_delete()
        {
            $id = (int) $this->request->param('id');
            Model::factory('News')->delete_news($id);
            $this->redirect('admin/news');
        }
        
}


