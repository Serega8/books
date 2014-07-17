<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
                $array = $this->request->param();
	}
//        public function action_cart()
//	{
//                $this->request->action();
//                
//                $array = $this->request->param();
//                var_dump($array);
//	}

} // End Welcome
