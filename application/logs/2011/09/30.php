<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-30 15:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-30 15:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /srv/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-30 15:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-30 15:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /srv/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-30 15:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-30 15:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /srv/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-30 15:39:21 --- ERROR: View_Exception [ 0 ]: The requested view log/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-30 15:39:21 --- STRACE: View_Exception [ 0 ]: The requested view log/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /srv/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('log/index')
#1 /srv/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('log/index', NULL)
#2 /srv/kohana/application/classes/controller/log.php(8): Kohana_View::factory('log/index')
#3 [internal function]: Controller_Log->action_index()
#4 /srv/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Log))
#5 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /srv/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-30 15:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-30 15:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-30 15:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.tmpl.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-30 15:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.tmpl.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-30 15:57:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting ',' or ';' ~ APPPATH/views/log/index.php [ 10 ]
2011-09-30 15:57:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting ',' or ';' ~ APPPATH/views/log/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-30 15:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL log/show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-30 15:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL log/show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /srv/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-30 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL log/show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-30 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL log/show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /srv/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-30 15:59:04 --- ERROR: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/log.php [ 13 ]
2011-09-30 15:59:04 --- STRACE: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/log.php [ 13 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/srv/kohana/app...', 13, Array)
#1 /srv/kohana/application/classes/controller/log.php(13): json_decode(Array)
#2 [internal function]: Controller_Log->action_get()
#3 /srv/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Log))
#4 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /srv/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-30 15:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL log/show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-30 15:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL log/show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /srv/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-30 15:59:43 --- ERROR: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/log.php [ 13 ]
2011-09-30 15:59:43 --- STRACE: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/log.php [ 13 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/srv/kohana/app...', 13, Array)
#1 /srv/kohana/application/classes/controller/log.php(13): json_decode(Array)
#2 [internal function]: Controller_Log->action_get()
#3 /srv/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Log))
#4 /srv/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /srv/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /srv/kohana/index.php(109): Kohana_Request->execute()
#7 {main}