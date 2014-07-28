<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-24 08:45:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/news/v_news_edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/serega/Документы/kohana/project/system/classes/Kohana/View.php:137
2014-07-24 08:45:37 --- DEBUG: #0 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(137): Kohana_View->set_filename('admin/news/v_ne...')
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(30): Kohana_View->__construct('admin/news/v_ne...', Array)
#2 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(27): Kohana_View::factory('admin/news/v_ne...', Array)
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#9 {main} in /home/serega/Документы/kohana/project/system/classes/Kohana/View.php:137
2014-07-24 08:46:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin/News.php [ 34 ] in file:line
2014-07-24 08:46:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 08:47:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH/classes/Controller/Admin/News.php [ 47 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:47
2014-07-24 08:47:58 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/home/serega/??...', 47, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:47
2014-07-24 08:50:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH/classes/Controller/Admin/News.php [ 47 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:47
2014-07-24 08:50:08 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(47): Kohana_Core::error_handler(8, 'Undefined index...', '/home/serega/??...', 47, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:47
2014-07-24 08:53:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tihs ~ APPPATH/classes/Controller/Admin/News.php [ 54 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:54
2014-07-24 08:53:29 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/serega/??...', 54, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:54
2014-07-24 08:54:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2014-07-24 08:54:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 08:57:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2014-07-24 08:57:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 08:58:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Model/News.php [ 38 ] in /home/serega/Документы/kohana/project/application/classes/Model/News.php:38
2014-07-24 08:58:40 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Model/News.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/serega/??...', 38, Array)
#1 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(48): Model_News->add_news('????????', '??????', '????????', '24.07.2014')
#2 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#8 {main} in /home/serega/Документы/kohana/project/application/classes/Model/News.php:38
2014-07-24 08:59:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin/News.php [ 49 ] in file:line
2014-07-24 08:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-24 09:00:37 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_News::action_delete(), called in /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Admin/News.php [ 57 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:57
2014-07-24 09:00:37 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(57): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/serega/??...', 57, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:57
2014-07-24 09:01:25 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_News::action_delete(), called in /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Admin/News.php [ 57 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:57
2014-07-24 09:01:25 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php(57): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/serega/??...', 57, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_News->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/News.php:57
2014-07-24 20:38:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH/views/widgets/w_menuproducts.php [ 3 ] in /home/serega/Документы/kohana/project/application/views/widgets/w_menuproducts.php:3
2014-07-24 20:38:12 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/views/widgets/w_menuproducts.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/serega/??...', 3, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(61): include('/home/serega/??...')
#2 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/serega/??...', Array)
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuproducts))
#7 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/serega/Документы/kohana/project/application/classes/Widget.php(83): Kohana_Request->execute()
#10 /home/serega/Документы/kohana/project/application/classes/Widget.php(38): Widget->render()
#11 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/Products.php(8): Widget::load('Menuproducts')
#12 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(69): Controller_Admin_Products->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#15 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#18 {main} in /home/serega/Документы/kohana/project/application/views/widgets/w_menuproducts.php:3
2014-07-24 20:50:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The cost property does not exist in the Model_Product class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/serega/Документы/kohana/project/modules/orm/classes/Kohana/ORM.php:702
2014-07-24 20:50:24 --- DEBUG: #0 /home/serega/Документы/kohana/project/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('cost', 200)
#1 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/Products.php(16): Kohana_ORM->__set('cost', 200)
#2 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#8 {main} in /home/serega/Документы/kohana/project/modules/orm/classes/Kohana/ORM.php:702
2014-07-24 20:56:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete product model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/Products.php:14
2014-07-24 20:56:39 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Admin/Products.php(14): Kohana_ORM->delete()
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Admin/Products.php:14