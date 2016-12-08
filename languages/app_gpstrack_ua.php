<?php


$dictionary=array(

'GPSTRACK_OPTIONS'=>'Настройки',
'GPSTRACK_MAPPROVIDER'=>'Cервіс карт:',
'GPSTRACK_MAPTYPE'=>'Тип карти:',
'GPSTRACK_MAPTYPE_MAP'=>'Схема',
'GPSTRACK_MAPTYPE_SATELLITE'=>'Супутник',
'GPSTRACK_MAPTYPE_HYBRID'=>'Гібрид',
'GPSTRACK_MAX_ACCURACY'=>'Максимальне значення точності:',
'GPSTRACK_MAX_ACCURACY_DESC'=>'Якщо точність перевищує зазначену - значення збережено не буде. Значення за замовчуванням: 0 (функція відключена).',
'GPSTRACK_MAP_REFRESH_TIMEOUT'=>'Період оновлення карти, сек:',
'GPSTRACK_MAP_REFRESH_TIMEOUT_DESC'=>'Визначає як часто треба оновлювати положення маркерів на карті (в секундах).'
/* end module names */


);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}
