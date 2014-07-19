<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Catalog extends Controller_Index {
    
	public function action_index()
	{
            // Получаем список продукций
            $products = Model::factory('catalog')->all_products();
            $content = View::factory('index/catalog/v_catalog_index', array(
                'products' => $products,
            ));

            // Выводим в шаблон
            $this->template->page_title = 'Каталог';
            $this->template->block_center = array($content);
            $this->template->block_right = NULL;
        
	}
        
        
}


