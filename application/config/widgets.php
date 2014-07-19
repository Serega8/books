<?php defined('SYSPATH') or die('No direct script access.');

//запрет показа виджета menu в контроллере catalod именно у метода index
//методы можно перечислять через запятую
//return array(
//    'menu' => array(
//        'catalog' => array('index2'),
//    ),
//);


return array(

    'news' => array(
        'catalog' => array('index'),
        'cart' => array('index'),
        'auth' => array('all_actions'),
        'account' => array('all_actions'), //виджет news не нужно показывать в контроллере account
    ),
    'menu' => array(
        'cart' => array('index'),
        'auth' => array('all_actions'),
        'account' => array('all_actions'),
    ), 
     'login' => array(
        'cart' => array('index'),
        'auth' => array('login', 'register'),
        'account' => array('all_actions'),
    ), 
);

