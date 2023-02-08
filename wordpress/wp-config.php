<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z&MdD]muUbMp!=CzHLmjh-9WPcbN%?= C7Bc%x%&HSxfVMN0 .W}vD=$IOHw Y(Z' );
define( 'SECURE_AUTH_KEY',  'xq;#V%ON )8rL@w/ND*6.BsfduBBVZ@aQ81k_OzMhs[03zIV*G&(L<JVvq.HbOR~' );
define( 'LOGGED_IN_KEY',    'O2VtOlx5^A^@KQq/!rqE9pEhFmm}cq9&=er;Al|G-n#eU(rKpw*]jsyyFw]DuAQQ' );
define( 'NONCE_KEY',        'F~6ebq&oRwmkB||I :Me,/d{mE!+tqdvq/}(%u1v?^1a;h,56M4b$RsHn ?4i30q' );
define( 'AUTH_SALT',        'NLXT10q)j)rK>#GH$8aj2m 4[npn+Q)+Y$jXMRf=,8<>99>fa<v2<p2qq,G.638Y' );
define( 'SECURE_AUTH_SALT', '%`Z6FJeK,>y6mb.)svjQvx/niF0S_q?pu:3p^F?<E<KE`UAWj6WXPLb>=Wh$RP<0' );
define( 'LOGGED_IN_SALT',   'Wzlr7^A..lX;0]zIlUw.=r)Q6fEF=bp=E]py]D:I#V8vQ-,L`tA`Um(7b-<,V$a,' );
define( 'NONCE_SALT',       '8=E-oar4pbf[O|F#y7A#7W^#,tj{*V54Fw}X.j!hT#%mun[FF@vP?Zkl|1.c1>bY' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
