<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-19 00:39:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Site' not found ~ APPPATH\classes\controller\welcome.php [ 3 ] in :
2013-02-19 00:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-19 00:39:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Site' not found ~ APPPATH\classes\controller\welcome.php [ 3 ] in :
2013-02-19 00:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-19 00:39:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Site' not found ~ APPPATH\classes\controller\welcome.php [ 3 ] in :
2013-02-19 00:39:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-19 00:40:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:40:30 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:40:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:40:31 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:40:32 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:40:32 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:41:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:41:29 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:41:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:41:29 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:32 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:32 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:33 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:33 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in D:\wamp\www\vexen\application\classes\controller\site.php on line 27 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34
2013-02-19 00:42:34 --- DEBUG: #0 D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\vex...', 34, Array)
#1 D:\wamp\www\vexen\application\classes\controller\site.php(27): Kohana_Kostache->__construct()
#2 D:\wamp\www\vexen\system\classes\Kohana\Controller.php(69): Controller_Site->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\vexen\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\vexen\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\vexen\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\vexen\index.php(109): Kohana_Request->execute()
#8 {main} in D:\wamp\www\vexen\modules\kostache\classes\Kohana\Kostache.php:34