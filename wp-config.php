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
define( 'DB_NAME', 'companyprofile' );

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
define( 'AUTH_KEY',         'O0h#/[FZuv 2FaX0WX:^3+l{Y)B]yEK!0-:JjlM&}3:ELO,wfa!g0hq+SI)~.sG-' );
define( 'SECURE_AUTH_KEY',  'r+dMx6!Un8L,*bMzhc!^]lfXMA<X7b_~I4x+=kM?![[sPBJ(C}OJiV|74CyaRCY^' );
define( 'LOGGED_IN_KEY',    'H?2QQ;e9In`XH] 0Uan,D&ci$bT:{2Nft:Q+rE0tsSv[`;(k[G$n1d_ ^R5j=n2N' );
define( 'NONCE_KEY',        '~V<r3a8![CYA@^8cg4G- M4Bf:xxby$(63#bFI$fPiG8?qH1OIS_mh,xa0#Z7b.a' );
define( 'AUTH_SALT',        'S>F03Ak^l*jPbO}zw7IO7=DQ_7a^JMX.<o2Sy`R]q4;0~ey]qOQAn}6LJ1-7tU|T' );
define( 'SECURE_AUTH_SALT', 'OqlHc650xAqs9m{^HICAo8Jw?@%$T{a2Oz(Ld`/a4,(3@MB]eW)k@ &U^#W:9^3F' );
define( 'LOGGED_IN_SALT',   'ajDa~HW||nqU$m10taJUpSr*0 gLBhfv0y95L-3s ,xY!14~YW9c&l:vl;W(-(Yo' );
define( 'NONCE_SALT',       'x|aaiO(rNa4r2q/mS$4K0H(fH>0-yYCuNp?>~Y,(CLY4,8h>{[0_OI$t!Y(}=Ytp' );

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
