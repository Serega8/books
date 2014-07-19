<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets extends Controller_Template {
    
        public function before() {
            parent::before();
            
            //current() - текущий запрос
            $widget_name = Request::current()->controller(); //название виджета
            $controller = Request::initial()->controller(); //контроллер
            $action = Request::initial()->action(); //экшен
            
            //загрузка файла конфигурации
            //////$config = Kohana::$config->load('my_group');
            $widget_config = Kohana::$config->load("widgets.$widget_name.$controller");
            
            //запрещаем вывод виджета в указанных экшенах, указанных в конфигах
            if($widget_config != NULL) 
            {
                if(in_array($action, $widget_config))
                {
                    // с помощью auto_render запрещаем вывод виджета
                    $this->auto_render = FALSE;
                    return NULL;
                }
            }
        }
        
}


