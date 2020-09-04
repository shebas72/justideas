<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/shebas72/justideas.sa/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'shebas72_ji' );

/** MySQL database username */
define( 'DB_USER', 'shebas72_ji' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NwIg&[ghfG-8' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql1005.mochahost.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(qv:eX+o</C3*|/yaZ_ub3#v#6%c;<cO{p.KWA~X1,>LF<7M0;,<cxTq~p9m.AV#' );
define( 'SECURE_AUTH_KEY',  'yHY:>iVd:L:;~8^H*=>;P$X0G{hmP+/As^ybuiAo.p*k=&YF%mg-?L=f2BPV08Ap' );
define( 'LOGGED_IN_KEY',    '7cN&h&b,*x@:J^Rpkv8Y,&?Cx>?!I+ttVjj8,e||i7iyAsKQ:Ps:6NTsOkhmL03m' );
define( 'NONCE_KEY',        'czS5PREnY332IbR}tL&7Cx:]9B7hI:#5aj5 Gp+]poq,5Z,ha9H8%k;W$wqSS]H#' );
define( 'AUTH_SALT',        '%I7X[]`aHEtQN-B7M%e:IOq:nBt;-)A74X5lTn9o60c?SPaf~r0Nve.bq DDSGt ' );
define( 'SECURE_AUTH_SALT', '@2Me$.gBJTL&|)3q}z6yL}M7w F1eU9Xox-exUP7WC83DRnmHnV9YLlJ+.3%::Z{' );
define( 'LOGGED_IN_SALT',   'Q `Seb,7:(m-MUvh=voO_Fc)WNC<H>`~5WEV~}zxXJT<S>rm)LBsTp+DLR;$R1pW' );
define( 'NONCE_SALT',       ']?rn!73)x/?XO?a@nwi[w@+g5[@rPZEJ~lzT^?Z*/4:R(q} >FOLm3PA_NS)Q}DU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ji_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
