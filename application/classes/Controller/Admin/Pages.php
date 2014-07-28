<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin {
          
        public function before() {
            parent::before();
            $this->template->submenu = Widget::load('Menupages');
            $this->template->page_title = 'Страницы';
        }
    
	public function action_index()
	{
            $pages = ORM::factory('Page')->find_all();
            $content = View::factory('admin/pages/v_pages_admin', array(
                'pages' => $pages,
            ));
            
            
            $this->template->block_center = array($content);
	}
        
        public function action_add()
        {
            if(isset($_POST['submit'])) 
            {
                $data = Arr::extract($_POST, array('title', 'alias', 'text', 'status'));
                $pages = ORM::factory('Page');
                $pages->values($data);
                
                try {
                    $pages->save();
                    $this->redirect('admin/pages');
                }
                catch (ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('validation');
                }
            }
            
            $content = View::factory('admin/pages/v_pages_add')
                    ->bind('errors', $errors)
                    ->bind('data', $data);
            
            $this->template->page_title = ' :: Добавить';
            $this->template->block_center = array($content);
        }
        
        public function action_edit()
        {
            $id = (int) $this->request->param('id');
            $pages = ORM::factory("Page", $id);
            
            if(!$pages->loaded())
            {
                $this->redirect('admin/pages');
            }
            
            $data = $pages->as_array();
            
            if(isset($_POST['submit'])) 
            {
                $data = Arr::extract($_POST, array('title', 'alias', 'text', 'status'));
                $pages->values($data);
                
                try {
                    $pages->save();
                    $this->redirect('admin/pages');
                }
                catch (ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('validation');
                }
            }
            
            $content = View::factory('admin/pages/v_pages_edit')
                    ->bind('id', $id)
                    ->bind('errors', $errors)
                    ->bind('data', $data);
            
            $this->template->page_title = " :: Редактировать";
            $this->template->block_center = array($content);
            
        }
        
        public function action_delete()
        {
            $id = (int) $this->request->param('id');
            $pages = ORM::factory('Page', $id);
            
            if(!$pages->loaded())
            {
                $this->redirect('admin/pages');
            }
            
            $pages->delete();
            $this->redirect('admin/pages');
        }
}


