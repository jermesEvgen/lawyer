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
define('DB_NAME', 'lcurisac_lawyer');

/** Имя пользователя MySQL */
define('DB_USER', 'lcurisac_lawyer');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'UTnK7Wi&');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'nY}SaK{6tcX]7H:>Iq8OC&v9`yMJZ7+~I/NamSDoLax?5]~PEk{T`4g$Wi{t!]i/');
define('SECURE_AUTH_KEY',  '@J9}zV4EFAQ$,II#xH%@,;ahOe5`&+CiEcV%;P__;zGDtZl}|,1n;{X`j6c5C&J1');
define('LOGGED_IN_KEY',    'X!QLbsXaI^|t[jQ?5GV4mCXs=}kPNLr&,Z{,-^[-*j].8`Bv.bv%=tU-aW^Vj!xQ');
define('NONCE_KEY',        'G6zEJJz;fXF4S$YYW*D+~9nep0*42d>FXBA+#,C!5(Wq)(VedU2t^yW_GwuN;O)x');
define('AUTH_SALT',        'd*V{,w.JkpU%t3+%-sN%dX>ysl#2OW[W;~B`y]pDz U88K4Qvpysj5|Ag(06r`xS');
define('SECURE_AUTH_SALT', 'q~;)|!yOjO4WSGjI?/v8LaQ=jjw@,weFnGogz={9~O3&7TPKIfJ*-WLBJBCRUIA=');
define('LOGGED_IN_SALT',   'sL~`*gT+vDY1~]iY)x(]5d3^ 3w7_Z]Z}|yiYfAtMrXoHA/3=;}~xJ?gDeWV llC');
define('NONCE_SALT',       'fZn^vh#5s@}sp`LW!e&Q.$%]n-c21axV{+ioy>i@0?2U&b3%`Ekt,QG{I36Id,`3');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
