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
define( 'DB_NAME', 'wp_study' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'O&OechRO_.RAZa<pN@f~t}@ykFKDDWJ){C6/=Jm9>YR+jX[Z/M?)p{$R pvq}~GX' );
define( 'SECURE_AUTH_KEY',  '98bi HnFU+S^D(l+/b3j1YC-8qe$Ok{kyj*?%ba>@Z3>c$6%Q4me6wAe6/,D_?k5' );
define( 'LOGGED_IN_KEY',    'r+|uun{(>b=?Z2UKQPb:lajsDkFdy5Lm4<(O>Y_2ECsGk1V&K4[C[v,EH&6a])D{' );
define( 'NONCE_KEY',        'pRKJJ:+/RP| z%v!K{Dh=TO4#Dt0OsYb{yKABE53+!V*n:L`L[lJ,/Xa|gb.(fhj' );
define( 'AUTH_SALT',        '-.`A5b$BqOTz4;>|dZH3_Dc$7S7tqGn{.7o3l36fJ,vW:dtQ_G+2zUepYnqY:%]a' );
define( 'SECURE_AUTH_SALT', 'fjG~*NW5c[s!$jo52ky2:>^7:P+<`v[p9c0_}T:X[!`qS;z/,5{{@|[(9[[c>j:a' );
define( 'LOGGED_IN_SALT',   'J&LgVj,M`xcswQJ6@&YD:Ok;I^sl8dY5A),uS0!:tN78l`uahj{*Q,zAD^u!A)F@' );
define( 'NONCE_SALT',       'T[L1TBGNy*zZW@~;D|--X{Am3)1~TqD}o]T9x]XO(&Fy?7/Kj[|PVWT*P5tu4ZFQ' );

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
