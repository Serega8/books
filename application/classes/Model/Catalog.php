<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model {

	public function all_products()
	{
               return array(
                'товар1' => 100,
                'товар2' => 200,
                'товар3' => 300,
                'товар4' => 400,
            );
	}
        
        public function catalog() 
        {
            return array(
                'Война и мир',
                'Дубровский',
                'Евгений Онегин',
                'Руслан и Людмила',
                'Горе от ума',
                
            );
        }
        
        public function top_products()
        {
            return array(
                'Война и мир',
                'Евгений Онегин',
                'Руслан и Людмила',
            );
        }
        
        public function categories()
        {
            return array(
                'Художественная литература',
                'Классика',
            );
        }

} 
