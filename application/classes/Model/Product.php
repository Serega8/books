<?php defined('SYSPATH') or die('No direct script access.');

class Model_Product extends ORM {

    protected $_table_name = 'products';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'comments' => array(
            'model' => 'Comment',
            'foreign_key' => 'product_id',
        ),
        'categories' => array(
            'model' => 'Category',
            'foreign_key' => 'product_id',
            'through' => 'products_categories',
            'far_key' => 'category_id',
        ),
    );
    
//    public function rules() 
//    {
//        return array(
//            //для того, чтобы применить правило ко всем полям
//            //вместо ключа(title) нужно написать TRUE
//            'title' => array(
//                array('not_empty'),
//                array('min_length', array(':value', 3)),
//               // array('Some_Class::some_method', array('param1', 'param2')),
//            ),
////            'uniq' => array(
////                array(array($this, 'is_unique'), array(':value', ':validation')),
////            ),
//        );
//    }
    
     public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'description' => array(
                array('not_empty'),
            ),
            'cost' => array(
                array('not_empty'),
                array('numeric'),
            ),
        );
    }
    
//    public function is_unique()
//    {
//        
//    }
    
    public function labels()
    {
        return array(
            'title'       => 'Наименование',
            //'cat_id'      => 'Категория',
            'description' => 'Описание',
            'cost'        => 'Цена',
        );
    }
    
    public function filters()
    {
        return array(
            //для всех полей - TRUE
            TRUE => array(
                array('trim'),
            ),
            'title' => array(
                array('strip_tags'),
            ),
            'cost' => array(
                array('strip_tags'),
            ),
        );
    }
    
   

} 
