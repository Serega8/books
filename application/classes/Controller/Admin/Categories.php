<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Категории товаров
 */
class Controller_Admin_Categories extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('Menuproducts');
    }

    public function action_index() {

        $content = View::factory('admin/categories/v_categories_admin');

        // Вывод в шаблон
        $this->template->page_title = 'Категории';
        $this->template->block_center = array($content);
    }


    
}