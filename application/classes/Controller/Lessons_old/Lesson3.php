<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Lessons_Lesson3 extends Controller {
    
	public function action_index()
	{
            //echo "Я люблю Верочку!!! Очень-очень<br />"; 
            echo Myclass::get_myclass();
	}
        
        public function action_index1() 
        {
            $options = Kohana::$config->load('myconf.options');
            //print_r($options);
            
            $foo = Kohana::$config->load('myconf.options.foo');
            //print_r($foo);
            
            $options = Kohana::$config->load('myconf')->options;
            //print_r($options);
            
            $foo = Kohana::$config->load('myconf')->options['foo'];
            //print_r($foo);
        }
        
        public function action_index2() 
        {
            I18n::lang('ru');
            
            echo __('Hello, world');
            echo '<br />';
            
            $username = 'Любимая!';
           // echo __('Hello, :user', array(':user' => $username));
        }
        
        public function action_index3()
        {
            $result = Kohana::message('forms/contact', 'errors.user_not_found');
            print_r($result);
        }
        
        public function action_index4()
        {
            //Получение текущего контроллера
            $controller = $this->request->controller();
            //print_r($controller);
            
            //Получение текущего экшена
            $action = $this->request->action();
            //print_r($action);
            
            //Получение текущей директории
            $directory = $this->request->directory();
            //print_r($directory);
            
            //Получение полного пути
            $derect_uri = $this->request->detect_uri();
            //print_r($derect_uri);
            
            //Получение параметра id
            $param = $this->request->param('id');
            //print_r($param);
            
            //С помощью класса request можно делать запросы на сторонние серверы
            //$result = Request::factory('http://ya.ru')->execute();
            //а также на внутренние (контроллер)
           // $result = Request::factory('Index')->execute();
           // print_r($result);
            
            //respons нужен для получения ответа
            $result = $this->response->status();
            //статус 200 означает, что запрос к данной странице успешен
            //$this->response->body($result);
            
            //редирект
           // $this->redirect('/');  //cработал
              $this->redirect('/Lessons/Lesson3/index2');  //сработал
             // $this->redirect('Index/index');  // $this  - экземпляр текущего класса - не сработал
            //$this->request->redirect('/');
            //Request::redirect('Welcome');
           // header("Location: /Lessons/Lesson3/index2");
            
        }
}


