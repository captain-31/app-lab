<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'applab' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&b`}!*i=JV~P8ao;;q!>C[VyC_(@2e0y^eOn3%O37ZC3)](%X%|a4Y;obv/%LcEx' );
define( 'SECURE_AUTH_KEY',  'aN&CGU+5eN|4)zfYPSsT?t0 vfxfplzB-=F}Z5U8xRTwSPEl $%Uff d=EY(pG6@' );
define( 'LOGGED_IN_KEY',    '*|>MmEQ|w{Z,!,%$_Qw*<(J7CdDRQHg}f?=Y,~nj41<N4GBoe<L/FljXiW-}I[O/' );
define( 'NONCE_KEY',        ' 4|216j0y:ZQ{vp5HxQ@;=vx G?NTvNWKQfk|u#i3![h>cnHReuP0OfEke-r#U8Y' );
define( 'AUTH_SALT',        'OKE uOdfK+p7ugW=omu|$VfalL[uNqTh_&),^sp<3(mrPiJa&sU`78*J&UQpZnfK' );
define( 'SECURE_AUTH_SALT', '7[ezrIFy7Ny@Mk;]|AHLX[T]n{]?m 9UD0EPlphQUqLG/sFOIsK{sR_:IGWZkYt:' );
define( 'LOGGED_IN_SALT',   'D]g[zKn*<T`rafhb+^&vy%!d?/Uup$HgW,[6]lC^I:50hh`k0Ln:1BZQGv]dyYb!' );
define( 'NONCE_SALT',       'JURAP8vhcs^h+oXHK5EQUY6M~7ej/$Ohacg^/ $ b,/=A*T@$sS<57gEt~_^03!X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
