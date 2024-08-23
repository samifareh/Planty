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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~H&6)V4:n:Ej[s+`(,*AT#4p|AoI1devX=Bpey$$Pw8,>sh=jARLyKV2Hn~i>4qf' );
define( 'SECURE_AUTH_KEY',   '7=0l4g):PVw|E;N/f,Kfvu}crB&@obM3J*i|IxvC&;nlmjmtu<73e^bEy#KNQTto' );
define( 'LOGGED_IN_KEY',     'ZC/1vR0aW,!UnE!5_.^KVAg~|~7;.c]jGUYD|Z_Ci9/qZ5YS(C.0EY?)YLc,!IT6' );
define( 'NONCE_KEY',         'XL8F`]W^*re&xg%y&}h*e/ww[~BV>9:W_wd=5ofFJV(:PAP #Uu```9JYLt2qV{A' );
define( 'AUTH_SALT',         'F)IHC.$Vk~,kV%4{t)2E%8l$n+*kk.MJ~wM0xV:u~P(iGr7/N|bNeH&`5MN#6c-s' );
define( 'SECURE_AUTH_SALT',  'RAMj.rnzc?NZ5B+kxH{*,j]]2eZV7/OpNZc^q/O(aQ[=j_8w#zhp{ml$UfLK!j;u' );
define( 'LOGGED_IN_SALT',    'RYt!^[xGgz#pTu[>Q(aE8U]3,kb~e^RZ~0>79!3gTb[f_fJ[jc&zsU5$)r=Ax?Rb' );
define( 'NONCE_SALT',        'r(b}aG|Or^ttYo+<}m$A:sn&EV/,3D5%m-2e#_d(j3%jNP XEGOYYloK=G}iih`p' );
define( 'WP_CACHE_KEY_SALT', 'L5#~kl~f<U}h$zm*&+sfjl+NQ>NZ5%7^11xTNs`h cqa@zcn(9c]7X7kRjs<g@mw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
