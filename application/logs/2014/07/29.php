<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-29 08:40:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Comment class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/serega/Документы/kohana/project/modules/orm/classes/Kohana/ORM.php:603
2014-07-29 08:40:37 --- DEBUG: #0 /home/serega/Документы/kohana/project/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /home/serega/Документы/kohana/project/application/views/index/catalog/v_catalog_view.php(19): Kohana_ORM->__get('name')
#2 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(61): include('/home/serega/??...')
#3 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/serega/??...', Array)
#4 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/serega/Документы/kohana/project/application/views/index/v_base.php(50): Kohana_View->__toString()
#6 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(61): include('/home/serega/??...')
#7 /home/serega/Документы/kohana/project/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/serega/??...', Array)
#8 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/serega/Документы/kohana/project/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#12 /home/serega/Документы/kohana/project/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/serega/Документы/kohana/project/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/serega/Документы/kohana/project/index.php(119): Kohana_Request->execute()
#15 {main} in /home/serega/Документы/kohana/project/modules/orm/classes/Kohana/ORM.php:603