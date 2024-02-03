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
define( 'WPCACHEHOME', 'C:\Users\fmive\Local Beta Sites\chic-dressing\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          'oHk-=-H+#FS$wZVj>]g ~dM&f00N*UtF(DEha{JNd>usBCm.P7eE#KR1y50]lX[O' );
define( 'SECURE_AUTH_KEY',   'NJn7zI(RNLNeYa1DzK&}/DW=/z[l*Fonlaf`)):!p<[mvZx[%KrvLCk,fUIvRf~>' );
define( 'LOGGED_IN_KEY',     'O]x.7)rS%,}X 9bs+0o_VIkn7qn2$/R!]VO2drrfxcCakb`T8_$Ad&.-{eX5HyDz' );
define( 'NONCE_KEY',         '(plyiwhG~k;xP^cO^0x*O?>bU74p&_!>kLB9CkpX/*F<T&;@--xzct>[8BtyLwB`' );
define( 'AUTH_SALT',         'HkhkpmlZuQru}S|2 TFZvf]4M5iA+~>cNY5oD3:,f|5i.dE5h1`WlAU/yM$ZRp2W' );
define( 'SECURE_AUTH_SALT',  ')1yh*!1a?jF{Cd$?}K%Ojn@Mrwq$5O4*U0x_+;v bJ0u(Pvf)u]QF]eFMO!$v#%(' );
define( 'LOGGED_IN_SALT',    '$[bC8gx;$:M@L+Y.F^M[/@kxPP.4o]NV<Az^KC=y6~U}-$[02wl&#-UJrS|Q?2WV' );
define( 'NONCE_SALT',        'Bdk-yuMmPTOr{PNJ4Vm%4vu*i-jpiyDj:L`b^Zmhg)1f+s(qrIcBUao$dEeRh~Ay' );
define( 'WP_CACHE_KEY_SALT', 'JB8Ghm#OM},0g15k&Y2~quR k4):<tRWwI-<Z&3Y>g*7i2Q/BI4yzZF&7R{2`dBs' );


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
