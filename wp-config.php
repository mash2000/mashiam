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
define( 'DB_NAME', 'mashiam' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '/I +IH``([th8;@}Hp_RKCTNr,TUZu<<>i`&bZR#a3*9;iVKISW$kY,fv4q#;2>,' );
define( 'SECURE_AUTH_KEY',  'TMu1:/3dIfM#2[}D|n`j:)G9lZhw{]-jk=476n;y2tw99oN|T%I/rqDn;~)<o`{|' );
define( 'LOGGED_IN_KEY',    '~{Aj3D8~->b2C*mNH)!I!g`0=pdE(=.DsV8%&b{<NS[!g2Y*C /h/If55}u(H<,|' );
define( 'NONCE_KEY',        '2FL^bVMA}wI@v@NFYW4-ACh:-(G`c;S6,P@MoyG}n2^s14S-dj7s*3Ihlfz[s0Ab' );
define( 'AUTH_SALT',        'PN~5T<e%O.p%gyq!F5Z<l448LwTI.g>5R[ZtlBr$.xBJMSs.B/UQ]i-#p T*VVz9' );
define( 'SECURE_AUTH_SALT', '%O}3i~*b X>MiFO?e6y;/a^l$I<Eoy%x:66[xoxxV,m[MPZ3xym_&!u0(MeGg|@~' );
define( 'LOGGED_IN_SALT',   'U.lB[OrA&X-9bD q5Og|Eaz`n.|kI;?Ml(Bz:`e_eds]0A~AywYZo5caw=K B?~-' );
define( 'NONCE_SALT',       'w7_Sg3-];)CQ_Wc|{)j=JyZcqzdhf^{IZ_~:G#cnRpfx!(;`,,,Xq-1x~M{d/-Kj' );

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
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
