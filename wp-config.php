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
define( 'DB_NAME', 'bd1site' );

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
define( 'AUTH_KEY',         'xl@~:Joqa*EmHlt#:gI[9eM-&YC0F#;*:q`?KNB>Sj9u%a:[*i*2,R}uhhDTMl@h' );
define( 'SECURE_AUTH_KEY',  ':/8( KnK_O:>@srI2)94f^0JHP]A/*5SlCX#Hx%!D`Ae}V8? 4Z+gNAq>DXIH><s' );
define( 'LOGGED_IN_KEY',    '(3M?9giXCmlQ,3ta`SQ~mYXF({L(aP!Hf=&6L!iAI.@mAM~$hxJ<DJ$t0j*>e,.c' );
define( 'NONCE_KEY',        'c!|^*-76:{HNKCa`S@yo=f?xe^m{Z,1>IwGxpD,kPM80M`l9)#h$ D[C75A^gU T' );
define( 'AUTH_SALT',        'f`-FJj2$#B7nCrOZ,rY-o!4z<0`*o4`MlS#j9~c1UzT!GL{ G<wNY/up),~l|T}*' );
define( 'SECURE_AUTH_SALT', 'dE2mlQCYCI{E~A/dAI-5&8~Z(*`O5Q4#o1oc(@J_R!xf6:En_a,{4S~iGAPy%|q[' );
define( 'LOGGED_IN_SALT',   'dxAm,7-W?BB:XXJ qnvopjvOb)fpi;wN-- c}m^.VU|&@{&0rRP<=W1q|z2{w_9Y' );
define( 'NONCE_SALT',       'pnY$1n)pWPqRWm]^W`19/;.t~F:j}Ph~l,yZrm}#V2w59J._p<(sk~9hx5cCmsMI' );

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
