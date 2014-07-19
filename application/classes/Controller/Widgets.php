<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets extends Controller_Template {
    
        public function before() {
            parent::before();
            
            //если текущий запрос является запросом инициализации, то запрещаем показ виджета
            if(Request::current()->is_initial())
            {
                $this->auto_render = FALSE;
            }
        }
        
}


