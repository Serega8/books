<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Account extends Controller_Index {
    
        public function before() {
            parent::before();
            
            $account_menu = Widget::load('menuaccount');
            
            $this->template->block_right = NULL;
            $this->template->block_left = array($account_menu);
         
        }
        
	public function action_index()
	{
            $content = View::factory('index/account/v_account_index');

            $this->template->page_title = 'Личный кабинет';
            $this->template->block_center = array($content);
	}
        
        public function action_orders()
        {
            $content = View::factory('index/account/v_account_orders');

            $this->template->page_title = 'Заказы';
            $this->template->block_center = array($content);
        }
        
           public function action_profile()
        {
            $content = View::factory('index/account/v_account_profile');

            $this->template->page_title = 'Профиль';
            $this->template->block_center = array($content);
        }
}


