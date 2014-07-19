<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Products extends Controller_Admin {
           
	public function action_index()
	{
            $content = View::factory('admin/products/v_products_admin');
            
            $this->template->page_title = 'Продукты';
            $this->template->block_center = array($content);
            $this->template->block_left = NULL;
            $this->template->block_right = NULL;
	}
        
        
}


