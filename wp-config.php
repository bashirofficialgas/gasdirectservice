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
define( 'DB_NAME', 'gasdirectservice' );

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
define( 'AUTH_KEY',         'pMMANk3>3T~&]&^I2Vde;5dBJj]|W?1@4w28G!4;dM]U!8h~fM-e-J;jjqlpwRvS' );
define( 'SECURE_AUTH_KEY',  'lhLK%}sq`CT;.ry@a0w@RTFUzJ&g1oM*tlxMp>>TcA}/^:&DYqRx|RGA6F]D;5y-' );
define( 'LOGGED_IN_KEY',    ';*4%c7Pb9Ye2U+K|luy-}{h;J4M(/,83x2PosJj8MXq=Llq@jMW^}xY,*F@F#Xr6' );
define( 'NONCE_KEY',        'qWXrP)Myq^(6MnOp*&@:-G:ex^3*rw*FjdD~%c|!KF *~C |QisrKP>SjKG)ND:W' );
define( 'AUTH_SALT',        'ziq}!D6zb(T=jX  j}FpDa]dSi=2+WRBd([hHR(98hwfEi~%A+tz^=A-9Vjv:1|m' );
define( 'SECURE_AUTH_SALT', 'C(n1S ytO+G4.= c5QH7U!1j%$mxUE2s{;UrG6mLroE:0:p0$FjkFs83P*!]Bw<Y' );
define( 'LOGGED_IN_SALT',   'D[LJa[xF[[E;g(oe3&U+-d<*u0(},<bYsqfR1Op9c23).RIDaww43:rx{e)2C,q8' );
define( 'NONCE_SALT',       '6#? 9LNJ}ky6uN;DvwmaLz8NoO uoMNw,xmrT*<$EznO0RzD[F8ZM4*0nM(d+[6X' );

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
