<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Catalog extends Controller_Index {
    
	public function action_index()
	{
            $content = View::factory('index/catalog/v_catalog_index');
            
            $this->template->page_title = 'Каталог';
            $this->template->block_center = array($content);
            $this->template->block_left = NULL;
            $this->template->block_right = NULL;
	}
        
        
}


