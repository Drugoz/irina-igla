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
define( 'DB_NAME', 'igla' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E`bVgNhNi:.o>)N=4yC{Fqg$z5?XXHR*q|7bz}D8.!Lf/tI<NACYRMdsy.bU;%8d' );
define( 'SECURE_AUTH_KEY',  'G%?92]zIdt,YfC|W>VNdH8=GH(j3c+X%x~HM28Q;8=h3V,6%LRIJPXIbI|0wPHz`' );
define( 'LOGGED_IN_KEY',    '#GgSuY+gOFWd5fdVus(CSvEfO;8!y+1 v#e^V3/k5 V@Sy1RG,46Eq%_}K<lirEq' );
define( 'NONCE_KEY',        'FUYm:P%pfC^C0D6JiDWe4ly.K^Z%8!]xD_kNR+{I!*zH-&@DeaY0s}up:tR/L#y2' );
define( 'AUTH_SALT',        'r #eTiN9}Tjgc>!y9orb+@as:v>j-K!LLo>R-o<.Wp8sn1JJFRHv+ds6}%af~wQ$' );
define( 'SECURE_AUTH_SALT', '6-hXJ_^vW5&u X- /1qMp+FuqN.OC6&_#f?o#RST3e{?n!+fKe%${F)}POX|f4+/' );
define( 'LOGGED_IN_SALT',   '/Sa5m_/ [^UzbUUE-$s Q;qYV*+a;5oav RWYF29. mvakRl-dM9s%#71Vv[C@PD' );
define( 'NONCE_SALT',       'lmD)h<:b%p8n(t,m&loG[loCVLR%J}{?{cX^?TrRf@w$Q?o,Qk{6d!,=;*fzBgA3' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
