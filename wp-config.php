<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'allisfine00' );

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
define( 'AUTH_KEY',         'k;4!he^F:|4o9bG2$bJkh[;R5ZkVW/:k8%/QY?fjx{P qV7=^,4K>-:aCVU%]z{k' );
define( 'SECURE_AUTH_KEY',  'K!ZHVGzx*T@S&}fHpyc2t<#<*U<hnY2.XM#d0l$,%I2bn>`W]9?kO-xIO*vl0te(' );
define( 'LOGGED_IN_KEY',    '*;XUj2RRC/WFVp/bT.fPcZQj!w5~KwQQQW< ,A$ZPU5)Icg!pjL*m&fhj}dJXh;=' );
define( 'NONCE_KEY',        'ab~>@.t*!&;#F|u5`+VK,a)n0d[t>.aNSZowpNX.zQVUus4P~X$M&$2 dci,s2-L' );
define( 'AUTH_SALT',        '8DuBW)HOb@eDJ, d 4Y1]GFd.UqH|.<H6lG4LIGiQPgQ!i(S!YQFFpQ1Yfk#1bNS' );
define( 'SECURE_AUTH_SALT', '4~auRPB$&d!QhnErB-mH|2yR.oY%D>Z@`lNMvld&2JzCX)n?{3m#(HLywLK-b_W0' );
define( 'LOGGED_IN_SALT',   '>I4<Tk)`1&)v2FZP<.%x<;l!WR+2z9n@YkgY&#dhRp56QgmT`f(ci^R>bLqmBUpk' );
define( 'NONCE_SALT',       'uR;E3d8+iq9B;GC93T:r}ki+ 21*?Ia~WoHA+qR>6}TdcK8:Odun2&O(.-7sG8=h' );

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
