<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         ';-poT}B}vFpq2|+*9aER 0pKRkHO`{^gMG%6w~r!%u8ffR(xqPv~Jo l7]>A4~IB' );
define( 'SECURE_AUTH_KEY',  'NPX$,E/RoVBorbmDRc]ClyJcR}:>%^s$`598sKU{Vg$.DmbaN7/P_rzZI[KdI<os' );
define( 'LOGGED_IN_KEY',    'v3Rwc0p6pn? h=38#0T9(j3p.X>06cC0M`5y?rFV]|$048Y27LnsN9p%m+01n<{w' );
define( 'NONCE_KEY',        '!Xr2$V1soyTAN%}POl9?-8u8-(g6(leL4?}bo}AjV%:$md`:Ur>0 +5SF ?##v=`' );
define( 'AUTH_SALT',        'W?tmvRFzAH!`$ih@c|:*uCaAIbujp:.B52j;}qfX!bH|h-pa5ZlNW:s#eeHTPFp6' );
define( 'SECURE_AUTH_SALT', 'gfe{g];Nk*#I@[98.8pVi~(Hot(ryBwj6D78o:67CJsQqP 7RLCpTg<jM~~;KJgB' );
define( 'LOGGED_IN_SALT',   '10@[/(3iCj^Jv,QD@F4Ym1AqcQ6ToP `Fe2p-4d1koBx50`lP)V;5S46GfCZ.EnY' );
define( 'NONCE_SALT',       'o_ap@,|)&x.^i9`&fbD3^D2XSIveCQvhe1)0fr^@=tS+-~_j]y/Eo3.8yt].8{qO' );

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
