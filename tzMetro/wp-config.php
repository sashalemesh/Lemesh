<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tzMetro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2zxTpD>]{obF)I{5<uv__qpeamZ($x4(}{:AbZa8*4-t+0wFHps!q U|NOun[Mns');
define('SECURE_AUTH_KEY',  '|gm}IKB|t[Io-ka.KfkY_[57syP[$t!;%xJ#rW}j2]sxRL9h=uu[;i-+pR1Y5EaD');
define('LOGGED_IN_KEY',    'QHc#$AOvRq#+*;6V0aQ[=n2)pSQDbnhbh@1lqOju-1c3D1A38>$0$k>y!lF|N7`)');
define('NONCE_KEY',        'JheS*o-b%|E^%[%K||=m=)pn}];PBg~i.PF<G%)QAi0Y&,YF)M`r4`[N~Oo3YYtp');
define('AUTH_SALT',        '!M7US*Wf|)ZnWwJ*Hyw5X.t{+*_SjOpI9MUe.83*!kq6f~L~Nms;SEwDxf@e=(ZU');
define('SECURE_AUTH_SALT', '<6]qi=#X:]bW5}Z#_q(yy@oiEJi1OVu4qL[d&.z6%Y270(-5l8+0BFx+eZC8q2my');
define('LOGGED_IN_SALT',   '|_}$_P/WhAoi,;|<IUN@m+S*c|8w+I/W,0e(PQ@:rkBK*UzRp@?Z_gljaH.#jX`:');
define('NONCE_SALT',       'e.?FH.P[LK<@yi|#^m&2} DKOwE2:(XNtV=N!NkMY.AM aTlK#}cBM*$xCpn_n _');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
