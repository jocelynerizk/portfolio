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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'Jg-U*>=$}6!e,ormZOc0NFKL1fZLx;R{He?nxT<}0Uv5{`vpz]9qE#7?14b*Kb|M' );
define( 'SECURE_AUTH_KEY',  '#P|PRq8j[o_2.,x^IhCrf]3g7A>xer9;7c-C3(D1Z#}UUa,=-nEy`8Wk~vx9n9~j' );
define( 'LOGGED_IN_KEY',    '(u^(^Be:dK|8$#ee5JtY@6+:L;xl^wb5zB|lVy@!.us``=e]06C>z7s|07*:!{c5' );
define( 'NONCE_KEY',        'U(+` J;6Cp6nX:vE{w+?wW9q9iE*#_AiGy7g{:=lm0X,L0!~0((Z$FRf X~Z*=Tl' );
define( 'AUTH_SALT',        'eb#n)?u[9pw~<f7A404?1q/5&eW$u,#qEIzBCGUkW%v<VD}VFrVPQ2ZP2xppD(6s' );
define( 'SECURE_AUTH_SALT', 'C3:.4H3__0/Fq2G=BG2uo<uvA<RSGE(Jr:$0/I5KwbavyY]=ZS_&k0:qsZ7=_=lb' );
define( 'LOGGED_IN_SALT',   '{a?Y-D7{xVmRZXV`!5|w/V*,ggcmf F6LWV93wX@/S$i-JL6A_%+][pfGz*S~Q3;' );
define( 'NONCE_SALT',       '!vYI-)`>fj$)e;QRk)#s>h-PD6c9|bh8la}cn:iP`BRwcM6(2al( 6cK<={:gDI!' );

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
