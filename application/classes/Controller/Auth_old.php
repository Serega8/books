<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {
    
        
	public function action_index()
	{
//            echo $this->request->action();
//            echo $this->request->controller();
//            echo $this->request->directory();
//            echo $id = $this->request->param('id');
//            echo $id2 = $this->request->param('id2');
            $params = array(
                'controller' => 'Auth',
                'action' => 'register',
            );
            //можно получить маршрут с помощью метода get
            echo Route::get('default')->uri($params);
	}
        
        public function action_login()
	{
            echo 'Login';
	}
        
        public function action_register()
	{
            echo 'Register';
	}
}


