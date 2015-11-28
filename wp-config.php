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

include( dirname( __FILE__ ) . '/wp-config-local.php' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'g%@nX1ogDsPS#,@y+NV)ut/ JB^E!WvL2ZEI6|8=e6FdDlb1k$ #VJ !j{zNv r:');
define('SECURE_AUTH_KEY',  'DP=V|O%8-Cx{hY6I/qJ_}=sOLqFzkkyfH*!t+!oU?-H|D@i|Fnzr^/%3e8.1oyBk');
define('LOGGED_IN_KEY',    '*n~Uz9D/&SU<1}vyjs,X- JP6KH%x;h1;))S!4EL2&bVYdqe<+8$]M}`,10[4?|=');
define('NONCE_KEY',        '3%GMI~-!<S~pG=&N1 C#v9gd0abb]Aga3UWaGZ?R@!b|=B9(V_?E]PnqY6Peu .f');
define('AUTH_SALT',        '?.U&_N,}T|R>xhe%>{c)8(>?+$Npa|:A>.sx|8`9.aD4?y/@@IId_HJ)5pt;Y+ }');
define('SECURE_AUTH_SALT', 'QmZ2-K$!(S-Pbm.yg-aQFB< 7n8EG?{7{<juRHHU$T?_Rxu~#-yh/%85ClqOQ[v-');
define('LOGGED_IN_SALT',   '.(GEi6*ZSub)HJpZmbtJ0w=;Y>@Hk$_m)}+;-nB8@ap)=68UeX~#k`8Bd2SM4o,|');
define('NONCE_SALT',       '8|$b5d&j+TgRb^ag*Gkj `.EE|5j1.QBUarL_.Jh$yTV)P{_Re~<`sPd1]dblV%>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pjo_';

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

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
