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
define('FS_METHOD','direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'conellas-db' );

/** Database username */
define( 'DB_USER', 'user-admin' );

/** Database password */
define( 'DB_PASSWORD', ':sorepare123:' );

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
define('AUTH_KEY',         '=}r_tV.{>DUMN3Wdire-Av?J:hs8G.U[89e @4}@wD6JgtKC? m_2/T3uzz>w!c$');
define('SECURE_AUTH_KEY',  '}q=wB&=oCuf2*$2f}8|7%x}+j?XHSH[f7|:yQ?qeK`B7-VX<[~OY;dz%m,~!I#f|');
define('LOGGED_IN_KEY',    'wu5nr}U9n[#-V| %{?,OD4x@n,T;6W?D}YHnYt/wAD4,.y }38P*?v|p>@kFLQ2b');
define('NONCE_KEY',        'Zk]L|6p9X;v@oLP*k|o132|ky4Hvp N%g[<in|^U+;vxlcQ?=:HnzO9(9A?@a/;a');
define('AUTH_SALT',        'L@y ^&5 m%%VE~^yVBN0^^qg+r-59jhyR$%2<lmPF(@O>rN+/$,g3LOTTM!jyR(q');
define('SECURE_AUTH_SALT', 'tw#ayvao.+m>UqtjIRX}@!=Q^6u`KO@wS7I&<:3p+|:]Q(@0->Xj2`+2sUixvBzo');
define('LOGGED_IN_SALT',   '*oQa!ah=gI3NOXL#5kR%r*{*B@mCTAbuzkX)Jeuo#,~NA+^jiKA.?fzQ$2Gp$F<C');
define('NONCE_SALT',       't`Mxb2@^;z?oF+B9|1NS,*HnTLgJ|Mh+:OI2x `g baqs|)-T#[|7TKbIOtV>()*');

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
