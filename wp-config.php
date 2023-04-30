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
define( 'DB_NAME', 'pp_db' );

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
define( 'AUTH_KEY',         '!+?(e}ZEG`~r0GMte.MEP(=R9??Rz~,>A>RkK=cYBIvmjmm1B}TT^&]*?p}3VhI(' );
define( 'SECURE_AUTH_KEY',  '|cQT4`Q-<[S_4B=2/GFvte$/DU-3,a?0:%6GG-82-lXS$ Kz><iFpM4*u@wTk#j#' );
define( 'LOGGED_IN_KEY',    'yP2yu:[kc0o^*3vD?F%qzWd>vl_USxcSlj[iv_n@r3Urj[!H&FI@CMUzLf0B:UbK' );
define( 'NONCE_KEY',        '=zx]LGYCEo:B2w-D.-^.mrh+`5ot;QXJ&icSy:12K1:sFnoGaqsS3a1n4,GVPcqQ' );
define( 'AUTH_SALT',        'aQl;*k5s87fT4(>H|TX%9={96!|gCjyJ/x]Sv.-V|Ty qAWg@~/Gm}T:cQ<[%<km' );
define( 'SECURE_AUTH_SALT', '3v[ ZMVc W~2JT`kvgNy&,DOj#UtGR:5pdRxPeRN?t3h/7F))K#dOc6CWuP9A<h^' );
define( 'LOGGED_IN_SALT',   'AC*FeXzCZk~,GU?&SluAqiS|i~jOI.v-82eiG>OwRdy1d<>!3cXX-S;6rv>u@!DJ' );
define( 'NONCE_SALT',       ' [lS1@xm-DPlc/4+#s,#%5X46=^iT>/L^%ezZz2|AA^Z>Uv1=D0ZeW$Ur0UXj^FI' );

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
