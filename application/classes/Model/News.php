<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends Model {

	public function all_news()
	{
               return array(
                'Новость №3' => "Бесплатная доствка по Минску!",
                'Новость №2' => "Летняя акция в разгаре!",
                'Новость №1' => "Запущен интернет-магазин.",
            );
	}
        
       

} 
