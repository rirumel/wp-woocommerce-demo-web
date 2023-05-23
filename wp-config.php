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
define( 'DB_NAME', 'wp_woocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'UXH-{pAPB GG<^N#{(5Y:.38y8s(SM7QEt3Wb,3a#agBqQ.KOxC1f55eM3G]!y=#' );
define( 'SECURE_AUTH_KEY',  'j,*UKU1 @.^_;v.w.D-Y9k*r7=10-H(@Nu<oZG(4V^Ez[7Ps@SZhmFky:IaCZC?A' );
define( 'LOGGED_IN_KEY',    ';o]NMkd5P(nwIr]+_a y:9DPVPnC;4Szkmj3)=;=u6?Klm5Y^<<g$NRE<88I4<Bm' );
define( 'NONCE_KEY',        'hnr?z8wJ;sE/]kk/-[z<MokT$]44>NgU+:f~V8:fmmC!{@viK@i2 >{(./2m52+&' );
define( 'AUTH_SALT',        'QwnZN-M(gJy5fVxKMwzn!,PMhMH&`S>vctN~P*N@SVvN}W~tq7AKI1-Mmgw,O#3z' );
define( 'SECURE_AUTH_SALT', '2.Fq{.HNo`J%8p=<3eq82uUUPW6R8{sc>Uij90Z%X,Rh$V2-6EiF%`knjx]KMe1P' );
define( 'LOGGED_IN_SALT',   'nOOgZ9;Y vE3@mGXpBFUmC(sEJY2U!pj#7D%6.,$:o:Je;Ao>qt3jK{(@H:18zI?' );
define( 'NONCE_SALT',       'D*kq.vOe174?4x*bsz|H*u+;-8H_^<Wj`IhooC, o{/r=tAK_EJ52W5<ohZ;#od_' );

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
