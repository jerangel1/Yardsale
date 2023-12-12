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
define( 'AUTH_KEY',          '38kkK!O;VuTv,_)aexfy(<-X_(C0fUW6-Hn+Bq-}|F)Bct$P9(pe02f3d97XV*6/' );
define( 'SECURE_AUTH_KEY',   'M91~OfdQCW7.H2V_NL3wu*0^t*Pl{bx#bX;E8HK}(J$0gJ_U>)sAB&1-J]iXl3/j' );
define( 'LOGGED_IN_KEY',     'q(7ti0]OHhBeG@BcAutt|w$5t9Y 06PT:f!8JbGs`2.iC36di5}uQ~0&LG|6:psO' );
define( 'NONCE_KEY',         'PWWenHVag*JvRw_ B8}bCMXk&g4Dt2q^4^ugzbnn1:4?q]yv:dM9Pe@(.(vbDgI<' );
define( 'AUTH_SALT',         '|3Nq/S=X4.1*4F@z[ja#a~bLgqm3OO6*1T#fe58V(PM rc5kp_,XUXg$d_*i~GW@' );
define( 'SECURE_AUTH_SALT',  'WL_=Fp[GzY~Bi<#!zk&3+c7idg7]}f1LPIwI,$[z6`%qiVBU[x:Nok)}oYvQ5}IH' );
define( 'LOGGED_IN_SALT',    '%zJ1K@-P=v%RMA}PW7%X8!0&*m$NYgE854j%4/k>Wa6S5k)y,r3aL9NxHHj^yX<V' );
define( 'NONCE_SALT',        'e)#@a3vV{.YIINB/>dDbE/lJr`wo$?6wqu,-P!*(cJ;2<<gR/-AVY~]nR$E0{M>P' );
define( 'WP_CACHE_KEY_SALT', 'UJ*zlweHm9M988xdMe5DL3lY>ned9~5G|u4W1>*;Q&bwzZ|HFh-!y`L]O{~irl&0' );


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
