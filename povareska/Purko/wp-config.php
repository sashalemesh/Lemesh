<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'pyrko00_clone');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~+^+KN~P8CiH!#6d3C4YOV;=n:tJk-azfwmX29-F ?fO|;)`r`8|gi6Y8o.|5,e_');
define('SECURE_AUTH_KEY',  'p_Jv|c{`WkIn;((qeC+e&`Ky*V>YYjq-eJD]cMc|r7p9cFjdpnLW+-L7%8+7%//M');
define('LOGGED_IN_KEY',    '^|$|}H2uZjVeOs1@ <?`MUu5tKB1c@od%YT;KE|+n3PFzSgAX`0D<Q|07|2&`LR>');
define('NONCE_KEY',        '<e@g&TBr2?b?rABnX(sQ9/?>L;/lw<x@})Z{/TNkF++x9%w=:G!.iZcyKJt9&/x=');
define('AUTH_SALT',        's|&&|Oq7%AO+NQz=yLON+:w$K-5k9ZxZ.W%d@^!$*MZn}$z&(g[d$nTk1#-xcMWE');
define('SECURE_AUTH_SALT', 'tkh|VqVWEW7cjU$ 4Ww2x/|xh7&UBpY$:+BjNDu-EDOCJ+b![06<|h:m]RZ]T1>g');
define('LOGGED_IN_SALT',   'Rk$c`LVOh2hlY$+qd@F-HYkcYXNCExEJmp<8T-R@pdN1n/=>C}w?|~%H##a+UZ5)');
define('NONCE_SALT',       '5NKXtG#dl|d9EbJS7dD>hgH4V)dUNEJ9:j:qY-(D$w5=?XHS2KVp/})zGu^E Y+D');

/**#@-*/
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
