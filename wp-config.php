<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo_db' );

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
define( 'AUTH_KEY',         ';R`?o[G-kCGl!3~P?YK`:a]0y!ql,i`YGVR-@?TsCeR$:a9>D>1cs-x &.P2h&)d' );
define( 'SECURE_AUTH_KEY',  '@Hz]GGkNe>*&XN!rYsLMrdA23&?FQl^ ,;ihr.i~URcrgU.].J7pSgC172RhuPNI' );
define( 'LOGGED_IN_KEY',    'O~[k;P4YkJ?ClR/Z3Cr,x2,LRrf?w|Zy%U8{)WiCJHh3M~zS^?;5z-q|)AZdlHoh' );
define( 'NONCE_KEY',        '?;hJ>0d+g[y99wIMP2:pJ@K]TGNfPWT?vd4c/5Kv?<nnrM#]0A0UZBNP(Iq8;*IY' );
define( 'AUTH_SALT',        '8x,Tg/}6NX;&4U2gLbp`Emf50#r6]ObE+``id!,j?{N]A=%RV//ja>j ~OUh2E6q' );
define( 'SECURE_AUTH_SALT', 'U.#]L$+kHzM;WyUf_PqVT3)1zIT};k64jo:`L^4l~iA0@N]V^x;?3L7K+Sv36SZR' );
define( 'LOGGED_IN_SALT',   '<FQU$xnEqKfXzTN,`rI`*^)$.uS/gThYYJSU+CkZ[%gxV{o:_Plu/`+yAhW7W?_F' );
define( 'NONCE_SALT',       'MYS| R7mC%;PTE:*A<hm_3cyqdzCz/06&hVyf,~kPJk=Y0lE7n(|c5.Zh@ B#MS8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
