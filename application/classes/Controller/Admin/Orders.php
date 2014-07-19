<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Orders extends Controller_Admin {
        
	public function action_index()
	{
            $submenu = Widget::load('Menuorders');
            $content = View::factory('admin/orders/v_orders_admin', array(
                'submenu' => $submenu,
            ));
            
            $this->template->page_title = 'Заказы';
            $this->template->block_center = array($content);
	}
        
        
}


