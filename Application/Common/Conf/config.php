<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		'blogs/:id' => array('Index/read'),
		'article/:id' => array('Article/show'),
	),
	'URL_MAP_RULES' => array(
		'new/top' => 'Index/top?type=top',
	),
	'URL_PARAMS_BIND' => true,
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'tpblog',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'think_',
);