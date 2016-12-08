<?php


$dictionary=array(

'GPSTRACK_OPTIONS'=>'Настройки',
'GPSTRACK_MAPPROVIDER'=>'Сервис карт:',
'GPSTRACK_MAPTYPE'=>'Тип карты:',
'GPSTRACK_MAPTYPE_MAP'=>'Схема',
'GPSTRACK_MAPTYPE_SATELLITE'=>'Спутник',
'GPSTRACK_MAPTYPE_HYBRID'=>'Гибрид',
'GPSTRACK_MAX_ACCURACY'=>'Максимальное значение точности:',
'GPSTRACK_MAX_ACCURACY_DESC'=>'Если точность превышает указанную - значение не будет сохранено. Значение по-умолчанию: 0 (функция отключена).',
'GPSTRACK_MAP_REFRESH_TIMEOUT'=>'Период обновления карты, сек:',
'GPSTRACK_MAP_REFRESH_TIMEOUT_DESC'=>'Определяет как часто надо обновлять положение маркеров на карте (в секундах).'
/* end module names */


);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}
