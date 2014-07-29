<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Catalog extends Controller_Index {
    
	public function action_index()
	{
            // Получаем список продукций
            //$products = Model::factory('Сatalog')->all_products();
//            $content = View::factory('index/catalog/v_catalog_index', array(
//                'products' => $products,
//            ));
            $categories = ORM::factory('Category')->find_all();
            $content = View::factory('index/catalog/v_catalog_index', array(
                'categories' => $categories,
            ));

            // Выводим в шаблон
            $this->template->title = 'Каталог';
            $this->template->page_title = 'Каталог';
            $this->template->block_center = array($content);
            $this->template->block_right = NULL;
        
	}
        
        //Просморт категории
        
        public function action_cat()
        {
            $cat = (int) $this->request->param('cat');
            
            $search_form = Widget::load('Search');
            $category = ORM::factory('Category')->where('id', '=', $cat)->find();

            if(!$category->loaded())
            {
                $this->redirect();
            }
            
            $products = $category->products->where('status', '=', 0)->find_all();
            //print_r($products);
            $content = View::factory('index/catalog/v_catalog_cat', array(
                'products' => $products,
                'cat' => $cat,
                'category' => $category,
                'search_form' => $search_form,
            ));
            
             // Выводим в шаблон
            $this->template->title = $category->title;
            $this->template->page_title = $category->title;
            $this->template->block_center = array($content);
            $this->template->block_right = null;
        }
        
        // Просмотр товара
        public function action_view() {
            $cat = (int) $this->request->param('cat');
            $id = (int) $this->request->param('id');

            $product = ORM::factory('Product')->where('id', '=', $id)->and_where('status', '=', 0)->find();
            $category = ORM::factory('Category')->where('id', '=', $cat)->find();

            if (!$product->loaded()){
                $this->redirect();
            }

            $content = View::factory('index/catalog/v_catalog_view', array(
                'product' => $product->as_array(),
                'comments' => $product->comments->find_all()->as_array(),
                'category' => $category,
            ));

            // Выводим в шаблон
            $this->template->title = $product->title;
            $this->template->page_title = HTML::anchor('catalog/cat/'. $category->id, $category->title) . ' &rarr; ' . $product->title;
            $this->template->block_center = array($content);
            $this->template->block_right = null;
        }
}


