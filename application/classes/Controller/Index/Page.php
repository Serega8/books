<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Page extends Controller_Index {
          
	public function action_index() {
            //$this->action_static();
            
            $page_alias = $this->request->param('page_alias');
            
            $page = ORM::factory('Page')->where('alias', '=', $page_alias)->find();
            
            if(!$page->loaded() || $page->status == 0)
            {
                $this->redirect();
            }
            
            $content = View::factory('index/page/v_page_index', array(
                'page' => $page,
            ));
            
            $this->template->title = $page->title;
            $this->template->page_title = $page->title;
            $this->template->block_center = array($content);
            
        }

        // Статические страницы
        public function action_static() {

            $content = View::factory('index/page/v_page_static');

            // Выводим в шаблон
            $this->template->page_title = 'Страница';
            $this->template->block_center = array($content);
        }

        // Контакты
        public function action_contacts() {

            $content = View::factory('index/page/v_page_contacts');

            // Выводим в шаблон
            $this->template->title = 'Контакты';
            $this->template->page_title = 'Контакты';
            $this->template->block_center = array($content);
        }

        
}


