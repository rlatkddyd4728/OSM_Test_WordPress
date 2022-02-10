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
define( 'DB_NAME', 'osm_wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'qscdfa156' );

/** Database hostname */
define( 'DB_HOST', 'osm-mysql-aurora.cluster-cyva3e7njhrp.ap-northeast-2.rds.amazonaws.com' );

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
define('AUTH_KEY',         ',ICk@O_PT#Y[-nr86@}%5:<uokEfe|m-d2juh0JLAH{-#WB[mJt(:-(H7>`aA:W^');
define('SECURE_AUTH_KEY',  'duoHs:1(&@O-%ycITo>Wj /r|q_KU)NBll;L]FkHio|1 ?t+6F/1,`4/6^PO<|]C');
define('LOGGED_IN_KEY',    'W!(cG{UxZ4&K6gw=j?J|/E++% Fy`3$5-VHbTLEGo/_+L5M1mvJ-2}vwUT ~Zc!{');
define('NONCE_KEY',        '+Fn&*A-:Ql$)*tHO~;Tq$O5H)8G|``a+4#@1!jv%j%<A!><9Z=VtjDz/RcAGlf3@');
define('AUTH_SALT',        '*G!@l|Se}#KZkCv3N+/3i*fLG+M66K4>,d`CC,}T+j89mQ;UsiPeZU4k+?N^D^a ');
define('SECURE_AUTH_SALT', 'yT7lz--}?#w7)r@s|`N)vZznJlXoI`lF+*.G_|;R!D-D`>s=,w(j!}(8Vj|$9{+.');
define('LOGGED_IN_SALT',   'U^BU6jy>Z-voVL8-cZJ-Y;A[6r;[ @iJ`V+-`5n+>$Z{M2_LM;|)5b+m#:}-5,!-');
define('NONCE_SALT',       '3|0?[i):~z<%uf61</y!~iXPQBrGl+1(0~a88_<ti2to$[PL2.W*C[>E@Zhqihs%');

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
define('FORCE_SSL_ADMIN', true);

define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/');
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
	        $_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
