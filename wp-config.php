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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'dnandi' );

/** Database password */
define( 'DB_PASSWORD', '//SFGyL5m/WMg0(R' );

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
define( 'AUTH_KEY',         ';nWYF;vj.085/m{vt;4Yq[M$(YiW[~UQm>9vAF.anq{L}a1Tcd_{7U3x%=J!98u5' );
define( 'SECURE_AUTH_KEY',  'NB{Gj!Dr34t$g,dV:J5iEIm&pg9Z=c5l;b :,Z!k`H-y%^Btyl{Tf!n.(T9lT0^#' );
define( 'LOGGED_IN_KEY',    'T!r*2lPTf|;N#Ko1Fr@),6kIf`b= CO`W6x D4_I^0AipTIgS)Up0Im0]D(V=8::' );
define( 'NONCE_KEY',        '%n|`&=q9IOFw-F(HRQF`hDA}>lPd?R=Gs@#9>0B?hDR#O/a`_)e>!F+@c}Q )xZi' );
define( 'AUTH_SALT',        'CWDTMEn|&Ux$7gO&P/[7N4mmwvvz`Q PS1!/3QAX  ^9fy{:Yr~>:;9Mt]OQ73@l' );
define( 'SECURE_AUTH_SALT', '~UY6kQ-(Q:,*m##E6)TC?DdT Px)jt4U)jYzE<awTMjJferu{]mah2nF[CZ!eqTv' );
define( 'LOGGED_IN_SALT',   '}hWR`PRdg,g2,t)w[w_{T&s9W^UIiSUv=?Jr`ClQU)^8W::tt{Qv<(ar@;zZ E>v' );
define( 'NONCE_SALT',       ';&r3BFw}emTqYDK>W<ZIjdJgah9)2g~9g)^`ZYh/!,l2o0y-d`<{;R6`X .-x w8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
