<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Products extends Controller_Admin {
    
        public function before()
        {
            parent::before();
            $this->template->submenu = Widget::load('Menuproducts');
        }
           
	public function action_index()
	{
            //если товара с id=2 нет, то скрипт не сработает
//            $p = ORM::factory('Product', 2);
//            if($p->loaded()) {
//                $p->delete();
//            }
//            -------------------------------
//            $p = ORM::factory('Product', 2);
//            $p->cat_id = 2;
//            $p->title = '';
//            $p->cost = 200;
//            try
//            {
//                $p->save();
//            }
//            catch (ORM_Validation_Exception $e)
//            {
//                $errors = $e->errors('validation');
//            }
//            print_r($errors); //Array ( [title] => Поле Наименование не должно быть пустым )
            
            $products = ORM::factory('Product')->find_all();
            
            $content = View::factory('admin/products/v_products_admin', array(
                'products' => $products,
            ));
            
            $this->template->page_title = 'Товары';
            $this->template->block_center = array($content);
	}
        
        public function action_add() {

        //Получение категорий
        $categories = ORM::factory('Category')->find_all()->as_array();

        $cats = array();
        foreach ($categories as $cat){
            $cats[$cat->id] = $cat->title;
        }
        

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('title', 'description', 'cost', 'status', 'cat'));

            $products = ORM::factory('Product');
            $products->values($data);

            try {
                $products->save();
                $products->add('categories', $data['cat']);
                
                $this->redirect('admin/products');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }

        $content = View::factory('admin/products/v_products_add')
                ->bind('errors', $errors)
                ->bind('cats', $cats)
                ->bind('data', $data);

        // Вывод в шаблон
        $this->template->page_title = 'Товары :: Добавить';
        $this->template->block_center = array($content);
    }

    public function action_edit() {
        $id = (int) $this->request->param('id');

        if(!$id) {
            $this->redirect('admin/products');
        }

        //Получение категорий
        $categories = ORM::factory('Category')->find_all()->as_array();

        $cats = array();
        foreach ($categories as $cat){
            $cats[$cat->id] = $cat->title;
        }

        $products = ORM::factory('Product', $id);
        $data = $products->as_array();
        $data['cat'] = $products->categories->find_all()->as_array();
        
        

        // Редактирование
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('title', 'description', 'cost', 'status', 'cat'));
            $products->values($data);

            try {
                $products->save();
                $products->remove('categories');  //удаление связей
                $products->add('categories', $data['cat']); // установление новых связей

                $this->redirect('admin/products');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }

        $content = View::factory('admin/products/v_products_edit')
                ->bind('id', $id)
                ->bind('errors', $errors)
                ->bind('cats', $cats)
                ->bind('data', $data);

        // Вывод в шаблон
        $this->template->page_title = 'Товары :: Редактировать';
        $this->template->block_center = array($content);
    }


     public function action_delete() {
        $id = (int) $this->request->param('id');

        if(!$id) {
            $this->redirect('admin/products');
        }

        $pages = ORM::factory('Product', $id);
        $pages->delete();
        $this->redirect('admin/products');
    }
}




    


 


    

