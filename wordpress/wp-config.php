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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'expose' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '(r1*Wt{LYWS2K.U?cuaWbUmfrsPrd~jJ5=ly(![-E5-S  wx&iqH0Py0{};Jf3(r' );
define( 'SECURE_AUTH_KEY',  '7Su0m t!5dBcl2G&/~<cm&g3;n0MbYN_e-.vLdQkuHK4W_l]l0|,^(CH|2=hJu?[' );
define( 'LOGGED_IN_KEY',    'g}y:}0&ld.SXxyD=tuYixXyfe;oQV_bPv6-QQ2]Y^eY+VFz8$WNGl07jH5A3Zd3B' );
define( 'NONCE_KEY',        'glEt`o0J?e/Km-4=TCdVX9_@0>-z@Z[Sqc.?tLS57mlG@;mnjOG7.=,5*C0O(,AK' );
define( 'AUTH_SALT',        'iu[tFKPGym3W L#,l,=nJD*UcwZq<>zB5t$O(C^ML6w<m:DGbH-~c)G+L~*2Vgc8' );
define( 'SECURE_AUTH_SALT', '?s,2S9CvD--S5h{g8=[IWp~28sFwwBDC:x2t_BFd@#9H<$>uP1bBZ^p$Mvc/S+i ' );
define( 'LOGGED_IN_SALT',   'C7^1 @*|[G_f>6zOZw>P$<km=0@boOQaJD$~PH;65P:`kk kiV]Go#p}CCa^*9Sp' );
define( 'NONCE_SALT',       'nB6)#OAL;uqLEE:D(a0`UcjFr)`|do9Ot%&P%a6% TS).#9]<0DnPt32q*(n]e8o' );

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
