<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM {

	protected $_belongs_to = array(
            'product' => array(
                'model' => 'Product',
                'foreign_key' => 'product_id',
            ),
        );
        

} 
