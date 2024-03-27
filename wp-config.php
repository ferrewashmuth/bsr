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
define( 'DB_NAME', 'bsrzb' );

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
define( 'AUTH_KEY',         'A<>w^lli2q]Ts%3wW%~AtY*_y;m[>c!l5~J.=R4&`^DmFauJPv!%DG.ib9I+SyWG' );
define( 'SECURE_AUTH_KEY',  '&7nuz-i~Vg,T9gh?i<L!O$IJB*,8?H/,i>@d%k&f@/j3r)0<|]*Zc6@H)0jO$USk' );
define( 'LOGGED_IN_KEY',    'j_6hc :~koyzoI,s!Xj4R&K(vZ_N.xa1>]U6#P*i5joaVGJH5(3%&*et)dJ}n2mj' );
define( 'NONCE_KEY',        'E9NpDM e!<$87=`lnwxdE&?,lHLU@3zAA$R58=eqd$F#|~s2138QP|qXAAgOSB$F' );
define( 'AUTH_SALT',        'YF}w]`V^ r6O3e:;e-aP=0o}s8f:-?<mw?3T^-R#CyDV/,1dW,3_L,~RP^3G&xt7' );
define( 'SECURE_AUTH_SALT', 'V/q<25a}2OXQfBhclmi|p5 Z/TsS <>F<p.|ld:]~}CFA=,w;V`vkfa#q}IowFx;' );
define( 'LOGGED_IN_SALT',   'A3aEWlh?p6#atUO9eQR.!!Z{1;+5.zF2sBihMzhc RHCN13wS1IWV&p{t{#ezh$.' );
define( 'NONCE_SALT',       '2Cl6P6:2]<>T2$8^(^<,cVvl/G-259F/qe`O3N:p8HzsCRh#]!6v*vqs/n]^F9S&' );

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
