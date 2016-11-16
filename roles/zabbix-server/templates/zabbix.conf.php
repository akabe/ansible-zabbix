<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '{{ zabbix_mysql.host }}';
$DB['PORT']     = '{{ zabbix_mysql.port }}';
$DB['DATABASE'] = '{{ zabbix_mysql.database }}';
$DB['USER']     = '{{ zabbix_mysql.username }}';
$DB['PASSWORD'] = '{{ zabbix_mysql.password }}';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = 'localhost';
$ZBX_SERVER_PORT = '{{ zabbix_server.port }}';
$ZBX_SERVER_NAME = '{{ zabbix_server.name }}';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;