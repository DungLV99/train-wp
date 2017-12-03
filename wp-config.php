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
define('DB_NAME', 'db_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2R.|;n2hhx YtvsU=6n7*:LR?x5qpx@=`@+IA}D*q86c$[rvapOkqwg 0LZb@$I6');
define('SECURE_AUTH_KEY',  ']Vg(/=(UGiFT.8Z*m2^mMKDAX]UQ*k(A4[BK@wcY>di#!vOx7=y +n`j=`/ZVN}}');
define('LOGGED_IN_KEY',    '[Hav<i}nFl-n^V~h8Y9Ye>WxGk2#PDefl!{8euLSK=^*mg&-:Ef)*o=T^k-ie[.z');
define('NONCE_KEY',        '{oYFGmo+d_cyII[cN#OU#4K agu>#~ItPY?8`}S)B|`ci&KMWF#$KNc$9k?Sl*9z');
define('AUTH_SALT',        'u+d%n]lellQDpRA {xm^ N60<~g[{ydsl~ O@iYjZoNCbkQ5Sp20aL}27D(Dk32-');
define('SECURE_AUTH_SALT', 'PZ3Dsz[|IW><Q%oL$Ipto$?^Nz[V!DQ9I#1|JbmK3]!McOx(^;>)qhd2bpNC_bm6');
define('LOGGED_IN_SALT',   '8:7jr7i]a;hCJJ%TDQHcG$=5=5>Yx(xT10IrrX+6,xwjI[^gOwkD}&c(aBdWhW#b');
define('NONCE_SALT',       'PzpTajJzm+p99G(o,lpd1vkSke$(`vBtOdon>P/X72rLn;6WM;DSue<Xn2w7we_T');

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
