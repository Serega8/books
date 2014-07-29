<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {

    protected $_has_many = array(
        'products' => array(
            'model' => 'Product',
            'through' => 'products_categories',
        ),
    );
        

} 
