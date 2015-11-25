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
define('AUTH_KEY',         'bXM7#AU-#8D>A^g^uHvtJ:FXDIK/U/qNX+pW>Rd;T14j`wFacU1c|oLl$Vz7,E>N');
define('SECURE_AUTH_KEY',  'p>x${Y9H 7yTo;gr!m;Y_h_?iYWyoGc%+5~)m.[ :b$02+#+$N]%jN)^-+6-JVsi');
define('LOGGED_IN_KEY',    'KIn};Pyq <JYCgW3}:~9S-4ivq-z7L9-=pBt|v=X-T[4CB&S4FnW<uL`3U{y2?YC');
define('NONCE_KEY',        'mM S&-<mYvw])^nHsM$|ke493*7OH,RCy;w<r+bcI[Quy,/vi$u?}_Q:@Y?N`]y$');
define('AUTH_SALT',        '<{~HOA>K-9!R;woupx>DH7r_3dL1G)8wdR4?!oyv;q?)ko6!,oIS8BvJJNW;`7&+');
define('SECURE_AUTH_SALT', '=y^bemd$9%.EklM;~aB0Px-+CXC@FF9&iv-^Yo[7hm_gYpe(4K9sG:#=e[Ho?i/f');
define('LOGGED_IN_SALT',   'cTnDmft-tImwil![|]qJ| Ef]^Ke(w+w^r4(}BUh8hw1Tp>UK!-@Z}H+T}EwU0Ud');
define('NONCE_SALT',       '!Cjupb@:WlHP`rF?kS%*Krns]-D(ZJ3^+N;?fV2G+X{j4)V7V~-e,3MGk#?~a!,y');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wp-pjo.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
