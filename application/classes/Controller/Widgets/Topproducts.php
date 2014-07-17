<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Topproducts extends Controller_Widgets {
    
        public $template = 'widgets/w_topproducts';
        
	public function action_index()
	{
            $products = Model::factory('Catalog')->top_products();
            $this->template->products = $products;
	}
        
        
}


