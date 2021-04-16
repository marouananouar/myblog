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
define( 'DB_NAME', 'github_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '@fEu1L+!{I.aD !r]5FD]6q(XSfw={5MS-;zIoV*e%)}qFcpBH]&s#xHj@C]E{eD' );
define( 'SECURE_AUTH_KEY',  '~^rRs80_y!D-ZN)v+U<Ql6{g1m_Y%|g&RcA*SZqv4!xW9pXkVd#2N2O-AwrA%{#u' );
define( 'LOGGED_IN_KEY',    '~G@[_PvbUqFu(6pq.|[;%.~24N*m#_^3`Uw[y*<jR;GD<0(r6Hn__ &wZDbx+^n~' );
define( 'NONCE_KEY',        '`]TK 0Z!G*{mjl|0 h1i3{`,mh5#XK$JL$&B%ZEm[oUn=~C<c-rcWTV=Q+s_ &@6' );
define( 'AUTH_SALT',        'xfk-7#@&_`tKnA8A+vuJ+(EFphEgD(%JKcgx0K O[k|t$6Fg<wU|%yEdTfB)`&_u' );
define( 'SECURE_AUTH_SALT', 'KbSc>%fW|86HGqjSbxPv;&=2Xv9P,=[bzPD6_T|S>JfUG((m|WDig:!a-eOb&K/8' );
define( 'LOGGED_IN_SALT',   'iA4&QlE%P+W?;1vDb8=hxn@DIc^V6oD[e/xR[I]_=ye=6x</SuAZZ|pQEa2B*O-A' );
define( 'NONCE_SALT',       'r3%~g9h`6?Vf0:YvcB^SdwS@B[v/)=XS]!& 38HA~[~@)fZ<xawb?V+Ab2;};<,&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
