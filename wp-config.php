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
define( 'DB_NAME', 'live' );

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
define( 'AUTH_KEY',         '3^PFtd9d^3B>z)ymU0N3zt,-0AzoJFv|oK~|zruSNJ^5P~AeNE-waL2kU5YS(@8Q' );
define( 'SECURE_AUTH_KEY',  'vz;w|a77/4{%_@o$ze#J;mrxUaDOwbOXh)Mr:r[{5bTu0?.~CMZ{pN^NLcOD_zDE' );
define( 'LOGGED_IN_KEY',    'eyfF~pf@>G).=HWsK-uU#w,AmRhtI%f!lX3Cw9RTuj|KN(+C#:D5adYl*hgKg(w%' );
define( 'NONCE_KEY',        'jEUda@d;Q6IZp5^PvNCqy-fAJUKm9]Z~cXLMR,KiMwO*{W`&mAG!eF{h,<H&loU4' );
define( 'AUTH_SALT',        '@aRkFBQ>)2e49CbmYm<w7i&<r_;L%<9@q/EK|+=a<cETwyRE3[:;>1^J.zVBC;T)' );
define( 'SECURE_AUTH_SALT', '7$ah^,GMD-)$w,Xc{M=?isAo?n< $Uy~X=/7qG+.t%xN)OAZ8[*azP>DoqVFpsEx' );
define( 'LOGGED_IN_SALT',   'P-F{LTm JBvN;oYe|#Pq$a0UP^GxF&gmB>:XLT,9d8*H~s{eD  ZjiHQiva~FB>}' );
define( 'NONCE_SALT',       'fCwf5CiV2=+{};:!G-J[I4eX$|^{zJ[Dw7s*[*|J<,Gnmh(;5t2:WGqN)GDI?:^y' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
