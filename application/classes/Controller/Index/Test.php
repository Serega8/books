<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Test extends Controller_Index {
          
	public function action_index() 
        {
            $products = ORM::factory('Product')->find_all();
            
            foreach($products as $p)
            {
                echo "<h2>$p->title</h2>";
                
                
                //получение всех категорий одного товара
//                $categories = $p->categories->find_all();
//                foreach($categories as $cat) 
//                {
//                    echo "<i>$cat->title</i>";
//                }
                
                // получение комментариев
                $comments = $p->comments->find_all();
                foreach($comments as $com)
                {
                    echo "---------".$com->text."<br />";
                }
                echo '<br />';
            }
        }

  

        
}


