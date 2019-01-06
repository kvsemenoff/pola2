<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'pola');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r&-+`-+4->Sfet|-[PP&~Mlne*%BPU1%+e37-%=&L[+jds6BmhhGeT~+-6T&b&_M');
define('SECURE_AUTH_KEY',  '(_[|36Mj41/q+!Z]<:Dnzo-v{pR,w=wRo,VxvND*~5f(=,zX&[Uw~<iW|*+m-wF1');
define('LOGGED_IN_KEY',    'F3i,+AL6i;a`=}`P=%hIswP_CV5:?h_ b-DM!V|hv}f7+AR|!uVTNFQhm~.OA?*X');
define('NONCE_KEY',        'r{QSqZ4(P@/s5zp..7{*`WmU7B$Lu$bpO/4i6Bt^+-wc$ivWuYbA>FxNsTdJ*M@C');
define('AUTH_SALT',        'Ip-?aL%z+kA<M0?E#KI-<1hAI[bb{P1:*2r8ADI>UT9i} >U!sDU*mo3;6OBV%C<');
define('SECURE_AUTH_SALT', 'BFeTJLiD-j Q/@~$yCllHvFYy?UO[yp**x.8SpskzK0s55tRPSN&N~}IIVH|4p9z');
define('LOGGED_IN_SALT',   'CLDpU)9sHkG@-Umez2Yj4L_!.vDvG}>zZ/w3P W58j2$b(0}g!SpIEWwFv5%GYw6');
define('NONCE_SALT',       'xrV6w$PgfKS<H~T.iC$TLDR*pAiO3~8%ajw|{8Lp52||ESzbePd+dp$VH0,8XkM#');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
