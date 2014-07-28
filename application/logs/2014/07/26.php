<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-26 08:17:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-26 08:17:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-26 08:24:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cat ~ APPPATH/classes/Controller/Index/Test.php [ 15 ] in /home/serega/Документы/kohana/project/application/classes/Controller/Index/Test.php:15
2014-07-26 08:24:32 --- DEBUG: #0 /home/serega/Документы/kohana/project/application/classes/Controller/Index/Test.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/serega/??...', 15, Array)
#1 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(84): Controller_Index_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Test))
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#7 {main} in /home/serega/Документы/kohana/project/application/classes/Controller/Index/Test.php:15