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
define( 'AUTH_KEY',          'X/*u{3aVy9_/3q)Y`;&@<g5K4jir#k[r?7B!9*A}]HacoLYror9rV8pVXU~I1Y^`' );
define( 'SECURE_AUTH_KEY',   '5`]]M>+Oy|aK`n)kr.xy(H5JW]8-`~wQ8D#-kb=Mj_7KN#<<;CtS?/.)Rj@vxn[#' );
define( 'LOGGED_IN_KEY',     'ZGV94@0bsccpj -e&:>HL4[f+*STOjf(Ol@P&6tL@^AV<N{&2zzjfvUP4Nr)*1>4' );
define( 'NONCE_KEY',         's>S~Eilk9iB4.P>k$*OR<]4(5Q.K`z$Ai=3<Q4sbpA+efjcmeT28lefg5F-dId=l' );
define( 'AUTH_SALT',         '7`#](in/!-O;O6!d}$IY?>LYPr2PSP54;qUG]$c4iHr%)8]!]Ay+g^C6vXVJ/H&~' );
define( 'SECURE_AUTH_SALT',  '}TO?.9WL.sN+{yR9W|ECvu~:CQ.(<?[M(hCcM`m7P|AD96WT*5HD1}R;/SQ1yp.W' );
define( 'LOGGED_IN_SALT',    'Zm9R1d(zpXY#@F0vZ^uN|{;b;V6V9.`G0 #{sgQh`W%RuLzm (l%CL:L-,nZAJK_' );
define( 'NONCE_SALT',        'HP^Ux;U$u`u;SS}|S-WQ6uv/BR`r,H?.iei-?Fx):?LlHwJu~Vwe2@2Y+<ie9Xr^' );
define( 'WP_CACHE_KEY_SALT', '.1/)MGP@Zd>VxDV_?x}nH`h5p@Y1?d3or+gu/8(hIoe+p[)J1]Wzc-e,k6*-,XF;' );


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
