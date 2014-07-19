<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {
    
        public function before() {
            parent::before();
            
//            $menu = Request::factory('Widgets/Menu')->execute();
//            $news = Request::factory('Widgets/News')->execute();
//            $login = Request::factory('Widgets/Login')->execute();
            $login = $this->widget_load('Login');
            $menu = $this->widget_load('Menu');
            $news = $this->widget_load('News');
            
            $this->template->block_left = array($menu, $login);
            $this->template->block_right = array($news);
        }
        
	public function action_index()
	{
            $block_center = View::factory('v_index');
            $topproducts = Request::factory('Widgets/Topproducts')->execute();
            $search = Request::factory('Widgets/Search')->execute();
            
            //вывод в шаблон
            $this->template->page_title = "О магазине";
            $this->template->block_center = array($block_center, $search, $topproducts);
	}
        
        
}


