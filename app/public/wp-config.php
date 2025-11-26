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
define( 'AUTH_KEY',          '-(BR0{lQ5G7=29W,IIsr@z`)`>&+2x[,hkp8r;bRrjoTniZ9P]$gW]m;/39lKWKe' );
define( 'SECURE_AUTH_KEY',   'Bud3j**bnOmDiLRKBsL2iXt(+.$]JFW?wFEpqY2|;%[Ys/bG|x|$0@?X+;+juJ#T' );
define( 'LOGGED_IN_KEY',     'ARkH@2X[{V3EHqp:+Z?.<*o7F4[;RCIkT4mhTBxAJ&}*!k*/=N3*L@:8G_&n3JL*' );
define( 'NONCE_KEY',         '0,TjKd7Q6kN?Xi<MJ3}>{DO/3%u0Y7]0y|#e@j$u.v$.~d/tH;mM=p.w yH{Y<GC' );
define( 'AUTH_SALT',         ' +[X9b`GCN<MI:ux)<i.3,sTs;E4P8Hm6Mn=VAS5RYvgw~|%TqU#zU3CL?puXVTR' );
define( 'SECURE_AUTH_SALT',  'Q{PPOt32 %4ZxNSMF6atcMpU+XAc41*8vQ:#{o3L@jFMJJJo:z*BxTHB?yQgeo_&' );
define( 'LOGGED_IN_SALT',    '+NyNKALOL,Yf*]IuPI}Z6+<%H{:Nh2c%fdSp?n/v |c*zfXcGVkDdDr A)A,NNFJ' );
define( 'NONCE_SALT',        '`>L6>@=$IFT:eR}Nt6S-1W[`8RYX)3mX(U-GO1=N+^Ncy<cON;+PUDp2@.g*h5`_' );
define( 'WP_CACHE_KEY_SALT', 'N%(v5Rn|6S55RD;Ah$5H) W6p#R1ls<8Nj.VT+LFM~j/C!#Sm-TGb0nJ%nGz_m+M' );


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
