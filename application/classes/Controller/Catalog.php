<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Base {
    
        public function before() 
        {
            parent::before();
            
            $menu = $this->widget_load('Menu');
//            $menu = Request::factory('Widgets/Menu')->execute();
            $login = $this->widget_load('Login');
//            $login = Request::factory('Widgets/Login')->execute();
            $this->template->block_left = array($menu, $login);
        }
        
	public function action_index()
	{
            //получаем список продуктов
            $products = Model::factory('Catalog')->all_products();
            $content = View::factory('v_catalog', array(
                'products' => $products,
            ));
            //2-й способ//
            //передавать параметры во вьюшку можно и методом set (вместо array)
//            $content = View::factory('v_catalog')
//                    ->set('products', $products);
            
            //3-й способ - метод bind
            //он позволяет привязываться к переменной, т.е. 
            //можно сделать наоборот:
//            $content = View::factory('v_catalog')
//                   ->bind('products', $products);
//            $products = Model::factory('Catalog')->all_products();
            
            //вывод в шаблон
            $this->template->page_title = "Каталог";
            $this->template->block_center = array($content);
	}
        
        public function action_index2()
        {
            
        }
}


