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
define( 'DB_NAME', 'koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'B}uDI/ZNTqJimhcLAuKES>,y4E1O%t;?R)O4OuOUBG+}.k1#n9P.R7]Y98uzL7Hi' );
define( 'SECURE_AUTH_KEY',  'hf~Q[qdnz6@aL(zlc)X[80l7*BT`Od;X7m^N8so_-t/{tIP;/_-0hD3 X0Y+KxXW' );
define( 'LOGGED_IN_KEY',    'c/Pc*($,`M&#:zAZzF1AC_VYa!/uelVJ`6LOUi@=?PO.P87u/c@fhvJbmc*K={?%' );
define( 'NONCE_KEY',        'xKa uwb=!&>e,VNIv2i}`YDB5vm6F>MlO6&R<5T P3`ypitjP9%! aZ1rj_N*QRu' );
define( 'AUTH_SALT',        'A]UMaahQY/|&/:zIFm0#&#bI)Hv?OBjf>ILlmHyWizLrY$;8ee{~e0nM86$+dr&V' );
define( 'SECURE_AUTH_SALT', '=%%.%EDFx/9xy3(p3e:9ZNb<9CS+N8@GO[5el%vj$$nqumv7jU@*5MmvpBqpkXb}' );
define( 'LOGGED_IN_SALT',   'G#abjuJ{VRtmaeJKq@*ex~`/&z,HHCyE[[unu.!gR4H86>bOEw>m(?QXW^3.=O/;' );
define( 'NONCE_SALT',       '9:lxQn6:QS3j} ,Lg 7!^m8hi*pRq_cw!7FU~[#t/:iNn@ k4qs-Ls3);%f_Sz=3' );

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
