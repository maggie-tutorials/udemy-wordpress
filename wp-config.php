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
define('DB_NAME', 'wordpress-udemy');

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
define('AUTH_KEY',         '8ro|a&c ,t*g6zv_<ia o^!jLgD=yJPTxR%eDgrg [{Ta{DAp-xtxf$>Z[W4VP a');
define('SECURE_AUTH_KEY',  'r|^%?#>oF[6)(t$Ehjz)#%k?s!AJUt`cQjU|$R=IS5q@u^bEz<U8#%1YIRMI9`iq');
define('LOGGED_IN_KEY',    'xtYe,y6;5_w}ARVX-6Ys6oSx]<A=VL#NZm_4QY^ed])DEZI2FNej{-$(OYv|p3Z:');
define('NONCE_KEY',        'bLXF.Nj+G7uZlX9VM<!%3iFI}d/3<[.t(.qqdxircyn}%0|LRf~I3QM!<.=7 Rhd');
define('AUTH_SALT',        'c@J,C0,UQyi:T-Wgugx__^:o0WAUw3`DhkLeU(/6:v^i8,Y4.m1l`R}:>iqDISAC');
define('SECURE_AUTH_SALT', '{Y RJjMFIt,_{ZB*-{(F*Rmyrw5hpxNl09]./@Qi>+;w^^!*I$@=lXt^,XH.rgFM');
define('LOGGED_IN_SALT',   'SBH)}p[uDk*k2e^-ShrhEBy[RZj.sy(:oGE=X<rlC:8FZn]26_<NGfKFWZp`30p;');
define('NONCE_SALT',       'K!V8v4=(^qj)?-H5fvcxzb/r[A~m2}W=mJ?7~3-Gj3*f;Du`A?i2qIP~9?*UCp-!');

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
