<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Cart extends Controller_Index {
    
        public function action_index() {
            
            $content = View::factory('index/cart/v_cart_index');
            
            $this->template->page_title = 'Ваша корзина';
            $this->template->block_center = array($content);
            $this->template->block_left = NULL;
            $this->template->block_right = NULL;
        }
        
}


