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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '>L,XMXYmv?VKc4[UPUiYpRgPR}9(X#~$>-D0)*jZ;]u4:U1B^Ek^:7-9N1G+B^DX' );
define( 'SECURE_AUTH_KEY',  '$z87H4j7>kIJM&#:.F,2< O[`sVk:A)sog`E]?[x`+- j:PJ/}txn8%/4xGAV1l?' );
define( 'LOGGED_IN_KEY',    '8ZNt7#]Qr)ZHIYxhKGeZ$.4=!trU6+BUqOZ}Fw3H1h2h*>3o5/LZN8!:^.Yjmy2,' );
define( 'NONCE_KEY',        '=Wm4eJ>-s6r|,(BUf%y<I{uYIa,tOSJ(&~rx>gE,/$CC:J$#Ud!lFErp.c{d#2;*' );
define( 'AUTH_SALT',        '^Tp?zHAcF~Ftpt@(ynVi~o|7Zw2fq~;<[ZO@on y>!p!5$3<!86&3hx!Qg&6}TM]' );
define( 'SECURE_AUTH_SALT', 'W9*|eF24e|?is1a]@Bq!yiJ7(JUL}.PbFO{3jj$V[A](ccI<}fH*]*bCb!.S>k%q' );
define( 'LOGGED_IN_SALT',   'jS.99EqT7*q{y5_%kV$kv.8/E)9|+dfgS p;{FXv!gG!i=p,4WVa&g|yg*.EsY m' );
define( 'NONCE_SALT',       'c-.D}Y0nOX)hBdoQrY,<{rkzl}m?%}7vnluf[>]6@fF-e5!Q(E($?>V[Oi//)b>P' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
