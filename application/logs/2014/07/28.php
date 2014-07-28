<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-28 10:52:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH/views/index/catalog/v_catalog_index.php [ 10 ] in /home/serega/Документы/kohana/project/application/views/index/catalog/v_catalog_index.php:10
2014-07-28 10:52:05 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/views/index/catalog/v_catalog_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/serega/??...', 10, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(61): include('/home/serega/??...')
#2 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/serega/??...', Array)
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/serega/Документы/kohana/project/application/views/index/v_base.php(50): Kohana_View->__toString()
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(61): include('/home/serega/??...')
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/serega/??...', Array)
#7 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#11 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#14 {main} in /home/serega/Документы/kohana/project/application/views/index/catalog/v_catalog_index.php:10
2014-07-28 18:21:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2014-07-28 18:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line