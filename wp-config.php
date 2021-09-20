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
define( 'DB_NAME', 'ctnweb' );

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
define( 'AUTH_KEY',         '<&X&)[^MUV/dmIA%0,n,w.rdyb<zZ~HLJ4DaFc0mP>IWT#Wl@ 2N`?(2s?oH4.lE' );
define( 'SECURE_AUTH_KEY',  'rU`VEVG=D1X=s7}^lZuTL@*x>l>CfU%>7agsw}yQRi}}2/5biOm;+)pAJZ;TM4U=' );
define( 'LOGGED_IN_KEY',    '3I7f2XGNvL78Ak@Z=|p^+w:BZq9Pobt*BSq1);e#UC.EI{V l)U+nF OL0/gXJ|J' );
define( 'NONCE_KEY',        'mwa%(-5.eB$n+e#>n/8!q0Zs@Oxhx(TkGpTy:g`bgr{1]ow/,$+?Mp!!{:nc./<6' );
define( 'AUTH_SALT',        'g`!T.sZMLs%U9eyE<OZ23z5:g5U}I >X*4:l*3?Eu;=}2w>joMR17;i>c5#7-#aa' );
define( 'SECURE_AUTH_SALT', '%WQU*7s:L{N|4h5j~/$^SKlFf#P8>TS`ixugcF!t[kF&H6p<k}aANJZNKH)MxZAG' );
define( 'LOGGED_IN_SALT',   'uBv5-82*lrcR[!|b=u(GIJ2WXTwX8!N]MmCvuv*z0s ;BL;W>pj JB%Gq{4m~|c4' );
define( 'NONCE_SALT',       '->,GfA-l@so/H<rp#CKK0aul|,(,C}?n^2jtH-EqOCE!UA|Cr<<W7{j+ZQ#9P}:L' );

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
