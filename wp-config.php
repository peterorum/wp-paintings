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
define('AUTH_KEY',         ' aXZP/_f O_oqWoR+:`~A]1a}=V;0=C1|^ |WEHl4ShVG`qYa<7w2Sm2Nra#|~O8');
define('SECURE_AUTH_KEY',  '5(Ash(-&P?<@+@>-3VJO-|+*rJx-[6%dIf*Aj=(%TWK1HhSIT/l6^-l-DP$k}o`|');
define('LOGGED_IN_KEY',    '#n-~,l4^Q#zV6B=99bg*s.|8DywwZ>JJeYn`a sAq|`z_k>oKEBDrt={-395{aBB');
define('NONCE_KEY',        '{Od=a[/7uy5(.P>F}j()?RE0CDn}Fep1vy+7%:]c{(eMPnf*n]-EZKV7cfd?(Cf_');
define('AUTH_SALT',        'cpEr<:CVXXvx]A =<H1)u=0%X_8=~OaWpE!Y+Kjdo{!.ZbO`#.l<!zY*A6k<A5=Q');
define('SECURE_AUTH_SALT', 'iB[%s?JAS(.w5jtB3<`Q7/z~5Rq_2=K>UpYb ehiK!pC#uY+hmWq+[l?vJ=k~ O(');
define('LOGGED_IN_SALT',   'yXT8Yay<J&8XWczK;6xskT*O|nt,!(pa#lP/s7nQaQEJw%/:O+WkVI@{4V+&oCc:');
define('NONCE_SALT',       'xel%,xUB>s<]]bvz%G(F>gS3-7>_iW+XHG(zpOn9Zo+(ni@n:PC0rGJ3B?m1}U>I');

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
#define('DOMAIN_CURRENT_SITE', 'of.peterorum.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
