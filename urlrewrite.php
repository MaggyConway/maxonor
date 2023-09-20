<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 1,
  ),
  1 => 
  array (
    'CONDITION' => '#^/video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 10,
  ),
  2 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 20,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 30,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 40,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 50,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 60,
  ),
  7 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 70,
  ),
  8 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE_PATH=$1&$2',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/index.php',
    'SORT' => 80,
  ),
  9 => 
  array (
    'CONDITION' => '#^/pure-life/collections/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/pure-life/collections/index.php',
    'SORT' => 90,
  ),
  10 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/tech/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/tech/index.php',
    'SORT' => 110,
  ),
);
