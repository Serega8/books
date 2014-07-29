<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {
    
        public $template = 'index/v_base';
    
        public function before() {
            parent::before();
            //виджеты
            //$menu = Widget::factory('w_menu')->render();
             $menu = Widget::load('Menu');
             $news = Widget::load('News');
             $login = Widget::load('Login');
             $cart = Widget::load('Cart');
            // var_dump($cart->body());
             $topmenu = Widget::load('Topmenu');
            //var_dump($topmenu);
//            $login = $this->widget_load('Login');
//            $menu = $this->widget_load('Menu');
//            $news = $this->widget_load('News');
            
            $this->template->styles[] = 'media/css/style.css';
            $this->template->cart = $cart;
            $this->template->top_menu = $topmenu;
            $this->template->block_left = array($menu, $login);
            $this->template->block_right = array($news);
        }
        
        
        
}


