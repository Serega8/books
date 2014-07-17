<?php defined('SYSPATH') or die('No direct script access.');

//запрет показа виджета menu в контроллере catalod именно у метода index
//методы можно перечислять через запятую
return array(
    'menu' => array(
        'catalog' => array('index2'),
    ),
);
