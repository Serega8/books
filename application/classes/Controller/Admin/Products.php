<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Products extends Controller_Admin {
           
	public function action_index()
	{
            $submenu = Widget::load('Menuproducts');
                $content = View::factory('admin/products/v_products_admin', array(
                    'submenu' => $submenu,
                ));
            
            $this->template->page_title = 'Товары';
            $this->template->block_center = array($content);
	}
        
        
}


