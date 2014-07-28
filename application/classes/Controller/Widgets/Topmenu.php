<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Topmenu extends Controller_Widgets {
    
        public $template = 'widgets/w_topmenu';
        
	public function action_index()
	{
            $select = Request::initial()->param('page_alias');
            
            if( $select == NULL)
            {
                $select = Request::initial()->action();
            }
            
            $menu = array(
                'Способы оплаты' => array('pay'),
                'Доставка' => array('delivery'),
                'Контакты' => array('contacts'),
            );
            
            $this->template->menu = $menu;
            $this->template->select = $select;
	}
        
        
}


