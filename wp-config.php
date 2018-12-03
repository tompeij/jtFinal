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
define('DB_NAME', 'jtFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'd$P9/RZWn-hM[0ca+(e=l{8~j$64CuKeeRoj@8+.[[3,R=]{5NF 4Z4sF=-wdv4;');
define('SECURE_AUTH_KEY',  'A?waO8=tYf7O/$|AI#y ug&xjG,hlD_/_<C,=fw^S_x/ca)mJW,8rB:q^R3><7!l');
define('LOGGED_IN_KEY',    '@1;#@YT}sHN)&~KPEug02F!ZJ1bS/a!V&2r;+-mAQVVMb>+2,tm`;mEo.,24|M)P');
define('NONCE_KEY',        '@//^%`c@zgE{IfKY$9]_9r|}@]W7paZB;^pGwe^$CI+.+5;2P-3rrfT{!(VpM&6o');
define('AUTH_SALT',        '<#v,#)CyQ/W!Y5ecVq(m03#|Y,,w_[KBF1_Z6=&)r, c<&TKHmERq4ob[8N*wz7t');
define('SECURE_AUTH_SALT', 'URf7uM_0qZ3`@3X2b.^xz$m$qK1DP04!6?a`Va?^HyW zl&{[- ,o#Dyw^asex,!');
define('LOGGED_IN_SALT',   'hP<Wvt-~u<TEt$kz d<d%XF5~6/V]o0%:P?h/sopx>w1m@zc,>-;deyj7A?7=4JI');
define('NONCE_SALT',       'BsK$.}L9U$l;u{AJ>j4|OSWaS?oX7Rkng0AFxhaENzFY#_vQ<y[Y1#MhP`|/j3H*');

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
