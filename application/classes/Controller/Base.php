<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
    
        public function before() {
            parent::before();
            $settings = Kohana::$config->load('settings');
//            print_r($settings);
//            echo $controller = $this->request->controller();
//            echo $action = $this->request->action();
//            echo $directory = $this->request->directory();
            
            //вывод в шаблон
            $this->template->site_name = $settings->site_name;
            $this->template->site_description = $settings->site_description;
            $this->template->page_title = NULL;
            
            //подключение стилей и скриптов
            $this->template->styles = array(
                'media/css/bootstrap.min.css',
                'media/css/style.css', 
                );
            $this->template->scripts = array(
                'media/js/bootstrap.min.js',
            );
            
            //подключаем блоки
            $this->template->block_left = NULL;
            $this->template->block_center = NULL;
            $this->template->block_right = NULL;
            
        }
        
        public function widget_load($widget)
        {
            return Request::factory($this->widgets_foder . '/' . $widget)->execute();
        }
        
	
        
}


