<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Auth extends Controller_Index {
    
        
	public function action_index()
	{
            $this->action_login();
	}
        
        public function action_login()
        {
            $content = View::factory('index/auth/v_auth_login');
            $this->template->title = 'Вход';
            $this->template->page_title = 'Вход';
            $this->template->block_center = array($content);
        }
        
        public function action_register()
        {
            $content = View::factory('index/auth/v_auth_register');
            $this->template->title = 'Регистрация';
            $this->template->page_title = 'Регистрация';
            $this->template->block_center = array($content);
        }
        
        public function action_logоut()
        {
            $this->redirect();
        }
}


