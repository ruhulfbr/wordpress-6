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
define( 'DB_NAME', 'wordpress' );

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

define('FS_METHOD','direct');


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
define( 'AUTH_KEY',         '&3DeCgZVm5)&I7R,w[9`w=-9nZgI><f;U9x8:so1F}`.)@8GRn2VIN%@<y?i1QY.' );
define( 'SECURE_AUTH_KEY',  'iQ<R3uoQ>JijJ]4|aibsDq1,TuccW~~I~er-m|Fo4au3p.Np~_Lufi~c<ge#nG(!' );
define( 'LOGGED_IN_KEY',    '6vSMkEXoY&ZuM,z$>x+R>J-0mAcyc=aFXV$oH9z[Dtung@L;*3`YdRCxuquxiBcV' );
define( 'NONCE_KEY',        '!`F#?L5KyaY{.$s%ZGCw<`{NW{H+TnT=g04DN.+!#g0ionHHn0w<>[pkV;ZPf^B=' );
define( 'AUTH_SALT',        'gjV7p;qJKV{fE9-*Q cSra,*@X,Is3J)*^NW-%EvxYI^s+MB+8_~|I,?ZFrmc+x>' );
define( 'SECURE_AUTH_SALT', '<aaA@LV5Lun}m}tk<.43hQAlgUB=,e-=m>}}ylfC9:M}We+,Ka_P}5cz0_W}^d?>' );
define( 'LOGGED_IN_SALT',   'toZ* `B9/r+{@ljpY?UPdR-Ox6Pm%#hsyyU,;wLNuRNikYG1/>}|Z&qjU:{c46gC' );
define( 'NONCE_SALT',       'KoN.]s&[*lc5Ahi#xkE+@aI]7PIsoebx*_~FVaajnyc]=)updgs~H-91;S s1Nk>' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
