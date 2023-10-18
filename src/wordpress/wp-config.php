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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tenmin' );

/** Database username */
define( 'DB_USER', 'novemberizing' );

/** Database password */
define( 'DB_PASSWORD', 'melong@17' );

/** Database hostname */
define( 'DB_HOST', 'host.docker.internal' );

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
define( 'AUTH_KEY',         '37#&^g~2;+t3aoU+tOiOxubvdl|ple-}7{!@ONxE{$DIvilastPBP#ey/2&Wu3PR' );
define( 'SECURE_AUTH_KEY',  '<NS1rvDCR@9[EG&n$p^th6LDFnS0z_$BwuKkI=}+1?+]3/}lUyJYPj06a]J9(TaD' );
define( 'LOGGED_IN_KEY',    'S^hA93S,i(~&kFTJ`iG~hhYTC%fLN9-@6IG=;[X$|/wB^FAeEn&SmZ cnE+o%Ryv' );
define( 'NONCE_KEY',        ',&EkoD9yp8[Aq`LbAkcOnem3X^31Bx^@1rwX}o|2:B5CX41iUit0aF}x8%qcED$Q' );
define( 'AUTH_SALT',        ';vZ~;$8nC#(yH4?I~T$y}O[gvM%G7SBB9n:sn?q8xUk s{r>6`;x{=ihj9`#eTF1' );
define( 'SECURE_AUTH_SALT', 'YqL(=<3#A_,rdZr7]&Us5umswp+6O<~[dBrv&kG8$wd>,U*wR_PX}#uR_Cm6x0U,' );
define( 'LOGGED_IN_SALT',   'b)GP1VG(fcyN~mPo:b:~LY;O[;eYlo]]|f!&oQmGO5fII3[}c`VgfxnE,VM1l3M$' );
define( 'NONCE_SALT',       'KYR09,gS Y7E=d(1,CbFmw~yfx|[KB^LP/|Qp(R[Vcl8;r1;}Ac!/&6z&eMQ]Q3$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

// if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
// 	$_SERVER['HTTPS'] = 'on';
// }

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
