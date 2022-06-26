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
define( 'DB_NAME', 'portfolio01' );

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
define( 'AUTH_KEY',         'BBO_hpd]D<k>A~^wlHpEvhY=zvNuJ%C5!.wz;pxxP18sf!vSh-bo#K4OPe*z7*0A' );
define( 'SECURE_AUTH_KEY',  'fxyu[Rz/)7*1i6`)}**y8|AuyNZcve7Rkff$Y{Jk%M~yw4A;b42?L+8byKOwoB|o' );
define( 'LOGGED_IN_KEY',    'FuzSk7i@&oo<~4g6_6$|qgdic;Ch{rk%[Cm<}]3s+ku6XZsj ff@Y_N0QtI0GoJN' );
define( 'NONCE_KEY',        's!=+Dpb34wbEnRs:ONK7Qz?!zq#bhI<)xc(J4~,-u^deS)*~ugVzg#[ax-bGy#-L' );
define( 'AUTH_SALT',        '5Zlr8[0K6_TqJgkE*?E*n*xl6[:9t,s:;T9mC3sJ l@ogm-B)U?Imbl8d1u2lbP$' );
define( 'SECURE_AUTH_SALT', 'A1IO2m/:z)17 DWWbWNec (Qp`xZI.D_Z3955vdL6e3UcMyzO{%nU7piTx|BeeCi' );
define( 'LOGGED_IN_SALT',   '=<r0I^!cGT7OF3<RDMMmMEQ{&GpW7-(Ewcu*.!K+Pc.uakmvO$yy`QNI`IFUa`$A' );
define( 'NONCE_SALT',       'YZ(-ddcEruM9|&QsPCHPC8>~<f;8`[Is>d<2H3Rt:(Cr9PD;`Z?a0S(UyBta{|^[' );

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
