<?php

$atlas = new Atlas();

define('PATH', realpath('.'));
define('SUBFOLDER', $atlas -> subfolder());
define('ROUTE', $atlas -> route());
define('URL', $atlas -> url());
define('SUBDOMAIN', $developer['status'] ? $developer['subdomain'] : $atlas -> subdomain());

define('API_URL', 'MY_API_URL');
define('API_TOKEN', 'MY_API_TOKEN');