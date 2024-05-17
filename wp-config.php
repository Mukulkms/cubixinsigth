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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ')2<x-*Z|Y;%?po8G|Hoq.<&9%_SOC|IJ:BgQqQcv;|mROs!jx^4m2bExt)GzRn;+' );
define( 'SECURE_AUTH_KEY',  '^xxfzu}Ks?$/`%Z#5Il~CB[ue6*fX![@#,$$=<?R$Q<6c^BYHT7(D~&+KHHa1-QI' );
define( 'LOGGED_IN_KEY',    't3F Ts0r(/K.11#_H!GA:H=9`/qr#YM#[SZ1gOqV1``-jqCv>%92qU9DqT3QL,Jb' );
define( 'NONCE_KEY',        '(Mo!G=s1v0n? BI1 }(`<gv@OrHM`D,%?e&Xqnn~aAnK1_+BhZ+~2/L;.?h_QbvC' );
define( 'AUTH_SALT',        '3A&;f^W3}LxPdM;0o^WcnhYlAr>l8dc/czWoeHwa]_XRFQa_PQ%guuyhc#*D%^NX' );
define( 'SECURE_AUTH_SALT', 'cQ1k&luf c)%Q!45U>zJWa//>s<4M-($6|f5I)EMZlv<_fGzWFti!c]`aw e5]?S' );
define( 'LOGGED_IN_SALT',   ',b.u-FW)#o1$[G?2tvCfz![|XV&_nn%)Pjz*<Kg69Js4glF9jZ/,e,@BpR(k|%k6' );
define( 'NONCE_SALT',       '3?|CZa&45`Ual];^b-$_8qvR]iw87z^T#pd;WUHa4X9^7zgbDB[+gY1a/ZD#+`Ry' );

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
