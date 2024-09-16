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
define( 'AUTH_KEY',          '%JN0HP:z?a$vN@C6W3L=3XR/>E>vkAbJK%2qn)~wO?>tht&xoI7b7Qpzy[VA4|S|' );
define( 'SECURE_AUTH_KEY',   'DV/9ChN21];!@;DN5d}5-ggO;?.Ttfb= @ulN ]EAp++FxGA>ru#&pocTzt3Zlvv' );
define( 'LOGGED_IN_KEY',     'Gi>Z+xDI?H<2agp`%SoM[|Jxe6S?X*hSSqiq7,SvXDUT+3>A#5)7ltQ~1hDv2=4Y' );
define( 'NONCE_KEY',         'W=JU-E`!oRg]7eB@RQ;LL=--vz!8YGg6vTcAZM{Jxe[de/ProT`cM.albQeK*Ky8' );
define( 'AUTH_SALT',         '!;k}cw)d#ER(DRvyE/xRY]YifO<i`%|9XH|=`9ZhIo1{+xM,u4q iBw`E`hm</(v' );
define( 'SECURE_AUTH_SALT',  '&P&hQM-yc^D+~cUU}iP@u}s/:ElI4UL(8C$p4AtYT(^)zt|wVHu#jUTLPjcQ#tCI' );
define( 'LOGGED_IN_SALT',    'b)DrZ?*]SticT}8)^[vsw,1t)o{H(;@p^YEKNBpr]Y[*g+lM{,hwWX+tyf9/BXcW' );
define( 'NONCE_SALT',        'V#f*X~-6Sm= YuJ;;>c6ne^z:-+C%n>}.i7_imZ1Pe<:qT^NB^.oTun;F.OSe)+b' );
define( 'WP_CACHE_KEY_SALT', 'd#~=X.w/Y4S6x<t[u4;J#Br:lR$9xyFhbMdk3]vxC,|E5eIBC2e)p4!iK[c^)7+5' );


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
