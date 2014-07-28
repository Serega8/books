<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-22 11:12:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH/views/admin/v_base.php [ 23 ] in /home/serega/Документы/kohana/project/application/views/admin/v_base.php:23
2014-07-22 11:12:50 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/views/admin/v_base.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/serega/??...', 23, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(61): include('/home/serega/??...')
#2 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/serega/??...', Array)
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#10 {main} in /home/serega/Документы/kohana/project/application/views/admin/v_base.php:23
2014-07-22 22:30:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_News::get_news() ~ APPPATH/classes/Controller/Admin/News.php [ 14 ] in file:line
2014-07-22 22:30:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-22 23:08:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_News::all_news() ~ APPPATH/classes/Controller/Widgets/News.php [ 9 ] in file:line
2014-07-22 23:08:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line