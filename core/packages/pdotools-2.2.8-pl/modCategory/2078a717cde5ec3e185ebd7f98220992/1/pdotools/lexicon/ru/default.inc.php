<?php
/**
 * Default Russian Lexicon Entries for pdoTools
 *
 * @package pdotools
 * @subpackage lexicon
 * @language ru
 */
$_lang['pdotools'] = 'pdoTools';


$_lang['area_pdotools_main'] = 'Основные';
$_lang['setting_pdoTools.class'] = 'FQN имя класса pdoTools';
$_lang['setting_pdoTools.class_desc'] = 'Путь для загрузки класса из "MODX_CORE_PATH . model/modx/".';
$_lang['setting_pdoFetch.class'] = 'FQN имя класса pdoFetch';
$_lang['setting_pdoFetch.class_desc'] = 'Путь для загрузки класса из "MODX_CORE_PATH . model/modx/".';
$_lang['setting_pdoParser.class'] = 'FQN имя класса pdoParser';
$_lang['setting_pdoParser.class_desc'] = 'Путь для загрузки класса из "MODX_CORE_PATH . model/modx/".';
$_lang['setting_parser_class'] = 'Используемый парсер';
$_lang['setting_parser_class_desc'] = 'Класс парсера, который используется для разбора тегов MODX.';
$_lang['setting_parser_class_path'] = 'Путь до парсера';
$_lang['setting_parser_class_path_desc'] = 'Путь до директории с классом парсера.';

$_lang['setting_pdotools_fenom_default'] = 'Использовать Fenom в чанках';
$_lang['setting_pdotools_fenom_default_desc'] = 'Сниппеты pdoTools будут использовать шаблонизатор Fenom для обработки чанков.';
$_lang['setting_pdotools_fenom_parser'] = 'Использовать Fenom на страницах';
$_lang['setting_pdotools_fenom_parser_desc'] = 'pdoParser будет использовать шаблонизатор Fenom для обработки страниц и шаблонов сайта. Конечно, он сам должен быть активирован.';
$_lang['setting_pdotools_fenom_php'] = 'Разрешить PHP в Fenom';
$_lang['setting_pdotools_fenom_php_desc'] = 'В чанках и на страницах сайта можно использовать функции PHP для оформления, например {$.php.phpinfo()}.';
$_lang['setting_pdotools_fenom_modx'] = 'Разрешить MODX в Fenom';
$_lang['setting_pdotools_fenom_modx_desc'] = 'Эта опция разрешает доступ к объектам MODX и pdoTools из Fenom через переменные {$modx} и {$pdoTools}.';
$_lang['setting_pdotools_fenom_options'] = 'Настройки Fenom';
$_lang['setting_pdotools_fenom_options_desc'] = 'JSON строка с массивом настроек согласно <a href="https://github.com/fenom-template/fenom/blob/master/docs/ru/configuration.md" target="_blank">официальной документации</a>. Например: {"auto_escape":true,"force_include":true}';
$_lang['setting_pdotools_fenom_cache'] = 'Кэширование скомпилированных чанков';
$_lang['setting_pdotools_fenom_cache_desc'] = 'Если вы используете большие и сложные чанки Fenom, то можно включить кэширование их скомпилированных версий. Они будут обновляться только при очистке системного кэша. Не рекомендуется при разработке сайта.';
$_lang['setting_pdotools_fenom_modifiers'] = 'Модификаторы Fenom';
$_lang['setting_pdotools_fenom_modifiers_desc'] = 'Список сниппетов-модификаторов через запятую, для подключения в Fenom. Каждый сниппет сможет использовать переменные $input и $options, как указано в <a href="http://docs.modx.pro/system/the-basics/filters-input-and-output#Создание-пользовательского-модификатора" target="_blank">документации</a>.';