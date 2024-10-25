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
define( 'AUTH_KEY',          'KmjQ6<),@hLR<J?|wKNewD;];=rT6RL!bO}mcEe4cEXZ|Z~swt0m_kkcD%_AfkC;' );
define( 'SECURE_AUTH_KEY',   'r[+U>)WYz/y>iS7lF_#1nXAl} ktS$FJGf}V>~3I/sfXxM)P<|!wQXilf@`)~#|[' );
define( 'LOGGED_IN_KEY',     'h+==-`NF^/[1-&}=*Hab&W.+8khtEw|q03#!00E)q)E&y}c:HiG,%e*VJc(?!Lt(' );
define( 'NONCE_KEY',         '%G:*&kbk]rY*=s;,%t6GUT}%64+=wdWyX!gq]N<{ 8y[>u`m::_bgq|2esR.0`fz' );
define( 'AUTH_SALT',         '*>4#O$Go:vE_TBU1*d%7-fAqAZ(1[wFn%v97n8k(6!HdHgxc6!(TQdv$]Fq3gZ^h' );
define( 'SECURE_AUTH_SALT',  'O/F{ 3Mf~E5`>3k<^+Vvl[aYLyM.!P4P)IX8{Fxb?`E}JY.FvGEc#p(g<^DD*,{m' );
define( 'LOGGED_IN_SALT',    'n(5[#nxD(Q.n:USCG[NV#PHyBC1;o)vUT++6wHVF)xiv)~WQG0p(Q80@AT6q.]^p' );
define( 'NONCE_SALT',        'Vs$tK*R|cu5TaYwQpi4[MK[a9~Myl~7jxLob[3.Y0pTXj.f7hj_8EG!uCk(fRtl;' );
define( 'WP_CACHE_KEY_SALT', '@jR)w`6J-@*pTXIH2swIBY6`dLUMv0BKeMI~oPldoIfCCK(xC^gB]nz5X:wrTdi[' );


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
