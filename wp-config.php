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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tourdb' );

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
define( 'AUTH_KEY',         '3g*+#?~Kz(kcX<jwN2X)Z^S<C+N_SDLVLyEi,c-$O0`/223jJ`@KfO82xebo<cQz' );
define( 'SECURE_AUTH_KEY',  'uAkBTY[g&qvf60J$vHqs~!,ycl6=)m%^x,^~T6Byjx4U?q4k%`M9?HI?!H2OUoY^' );
define( 'LOGGED_IN_KEY',    'E1bhVr={Zrd j$9:<^tXfx$>1MHlau_2nRcQ#F#PzVw:+l.yksa8RP7[V[4Oh[Xh' );
define( 'NONCE_KEY',        'Gk/WYPf0h+U?*AA*R<95lK_n?h=FDGh0ytcIztSrf.x;&]$iColgBcF+Ud<`s_7[' );
define( 'AUTH_SALT',        'R;]c{>X9iv>)l)1nDXnZY!j@Pm;;2~;uZ~&?[5)eS[@:r59<tn9qV|FyF7D=O&DX' );
define( 'SECURE_AUTH_SALT', 'cFHVeT4]MxJdttDfqij6jQ<B.vuFbrBu#poxGCU@>py?hh?/#z)_d9btZc&RkSc&' );
define( 'LOGGED_IN_SALT',   'WGfTvG.VLUq4W7Td.8Curd3#fR@dfm&~ 8R-<nXm.1RVVH4cAHs|aN408T8bQqta' );
define( 'NONCE_SALT',       'k$eyVC.Cwo#F.B6d3P ISq4v`u2m^.kEciKC8IRmu8j(`AzO|3&=+d,+5*S+c7a$' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
