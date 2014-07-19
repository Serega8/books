<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Main extends Controller_Index {
        
	
    public function action_index() {
        
        $block_center = View::factory('index/main/v_main_index');
        $search = Widget::load('Search');
        $topproducts = Widget::load('Topproducts');

        // Вывод в шаблон
        $this->template->page_title = 'О магазине';
        $this->template->block_center = array($block_center, $search , $topproducts);
        
    }
        
}


