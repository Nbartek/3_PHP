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
define( 'DB_NAME', 'w_3tigim' );

/** Database username */
define( 'DB_USER', 'w_3tigim' );

/** Database password */
define( 'DB_PASSWORD', 'w_3tigim' );

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
define( 'AUTH_KEY',         ')377^B[VFnm*gUCXTW-IJ, -M11TC*HR)*G6<@T,EO! qpX>8$[-+~~vyub=)BTT' );
define( 'SECURE_AUTH_KEY',  ' gt[@_}Peo{E*J N/^@h$bqHu!QWeA9vlf*od.#>NjD@)==tty~?+2uIC35r%N-w' );
define( 'LOGGED_IN_KEY',    '|zyLe{3d4/L.nCfHTDR%QIOEmA$%Vs f?[VT.R^4CCtzC5yfpR9oi1*@enc*&SQ)' );
define( 'NONCE_KEY',        'x_nE<po[_F):hz,Sk.N%pOCl|s^UEDq[4*&j#DpyI]l.5-yBb$^oInmrhK8eR%Fo' );
define( 'AUTH_SALT',        ',VID>c12k/L[Z9x*rDd~ANZFXn}1=!sNYBCvv,}v%Ca8JZCUo6^NY[jBqJ~UI|p1' );
define( 'SECURE_AUTH_SALT', '{2(ru9]1[Bb7=MO!`ZdDllj$P2&pQY,hVo,u`cbg5d<ro@X@,}A,;.14&sKvNoI9' );
define( 'LOGGED_IN_SALT',   '06_^>/0F,a|Vw|!2q?^W83)@l}Gy>8[21O4dbRm+Q,fo%Js;86C&X`sdbk=+VW!n' );
define( 'NONCE_SALT',       'Q<)CZ37CdC<q}QKmTO)A)B3F@D&/sAJg.*~6?QSkM>|VlFGE^9Q:LxBtSed+~Be=' );

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
