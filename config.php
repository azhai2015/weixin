<?php

//配置数据库
define('SQL_SERVER_NAME', '(local)');
define('SQL_DB_NAME', 'test');
define('SQL_USER', 'sa');
define('SQL_PASSWORD', 'azsOFT');

return array(
		'mssql'=>array(
		     		
		), 
		'db'=>array(
				'host'=>'localhost',
				'port'=>3306,
				'user'=>'root',
				'passwd'=>'',
				'dbname'=>'tyhwa'
		),
		'msgs'=>array(
				 'success'=>'成功',
				 'isExistsfile'=>'已存在该文件',
				),
		'themes'=>'default',
		'report'=>array('bak'=>'./report/bak/','jsonpath'=>'./report/json')
);