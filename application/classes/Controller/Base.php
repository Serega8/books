<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
    
        public $template = 'v_base'; //базовый шаблон
        protected $widgets_foder = 'Widgets'; //папка для контроллеров виджетов

        public function before() {
            parent::before();
            $settings = Kohana::$config->load('settings');
            
            //вывод в шаблон
            $this->template->site_name = $settings->site_name;
            $this->template->site_description = $settings->site_description;
//            $this->template->top_menu = Request::factory('Widgets/Topmenu')->execute();
            $this->template->top_menu = $this->widget_load('Topmenu');
            $this->template->cart = $this->widget_load('Cart');
//            $this->template->cart = Request::factory('Widgets/Cart')->execute();
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


