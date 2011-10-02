<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-02 09:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-02 09:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-02 09:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-02 09:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-02 09:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-02 09:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-02 09:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-02 09:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-02 09:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-02 09:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-02 09:37:47 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'log'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-02 09:37:47 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'log'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /srv/http/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /srv/http/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /srv/http/kohana/application/classes/model/log/quota.php(48): Kohana_Database_Query->execute()
#3 /srv/http/kohana/application/classes/controller/log.php(27): Model_Log_Quota->loadPart('id', 'asc', NULL, 0)
#4 [internal function]: Controller_Log->action_get()
#5 /srv/http/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Log))
#6 /srv/http/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /srv/http/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-02 09:38:30 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'log'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-02 09:38:30 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'log'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /srv/http/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /srv/http/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /srv/http/kohana/application/classes/model/log/quota.php(48): Kohana_Database_Query->execute()
#3 /srv/http/kohana/application/classes/controller/log.php(27): Model_Log_Quota->loadPart('id', 'asc', NULL, 0)
#4 [internal function]: Controller_Log->action_get()
#5 /srv/http/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Log))
#6 /srv/http/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /srv/http/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-02 09:40:07 --- ERROR: Database_Exception [ 1146 ]: Table 'log.quota' doesn't exist [ TRUNCATE quota ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-02 09:40:07 --- STRACE: Database_Exception [ 1146 ]: Table 'log.quota' doesn't exist [ TRUNCATE quota ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /srv/http/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(4, 'TRUNCATE quota', false, Array)
#1 /srv/http/kohana/application/classes/controller/log.php(76): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Log->action_generate_quota_log()
#3 /srv/http/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Log))
#4 /srv/http/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /srv/http/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /srv/http/kohana/index.php(109): Kohana_Request->execute()
#7 {main}