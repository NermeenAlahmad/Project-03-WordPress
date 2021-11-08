<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JQndLu:z^_:.D4.8%}tsb+?r@*cw%/9o6$nB_Ln]o%1Lzxv`d!t+muzs.7l`xV{n' );
define( 'SECURE_AUTH_KEY',  '%,9T|)4SsYQ3xOd=E9Er9BU*?9s.YA:k^q89_svK9#1RMZ`dE8s TYcOU%,=<L+F' );
define( 'LOGGED_IN_KEY',    'g)Pzc65`Wz&T1v9u[X/f^iRX8Et@bjo5?x}5Kk0__}g25+2DHb0M.>/j`1X|8(jr' );
define( 'NONCE_KEY',        'j~stg>08!azF6lSnr@}l?bbJJ8-3ytxLxv-{Et2/ 8QJ=+BMyXk~h.nzGmLR,z4+' );
define( 'AUTH_SALT',        'yVX[s8G|9!M;8{M? 1CPpk`3kC0,B3^MAe(9{cauOq+&|n+Gcgu%&x#MBi!YpRC6' );
define( 'SECURE_AUTH_SALT', '(01U%,hY)gc+1GXHL W8S/m1~;[p~4Wew@gUpgf:Htrs<qe{C{LJ6b}|5-Fu~np3' );
define( 'LOGGED_IN_SALT',   '?Iwi#JbvS+L!-NQB*unBWHWhP#G%./rpTQp(&z5$ad|s|U6*H/b/>0=n=`6}a)]N' );
define( 'NONCE_SALT',       '.<KXC(<De6VBhgtR-1=b8/fL1Q;H$+{?Q]w]xHW6L<eLyj^hP,aht08Kl.! tY/q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
