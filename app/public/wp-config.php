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
define( 'AUTH_KEY',          'N7M/kGWb9%:8Fk#`*e<H=&n<5lj}#qi1$QeUlQGOe0Qe`bS%fxO:F=&b60x%Z9Gc' );
define( 'SECURE_AUTH_KEY',   '#(4uEOsHykZ5|iTYNIo/v1P2P`/5,Gdo46BUoq`1z`59w;7n9]gYufR>_t(-J!gG' );
define( 'LOGGED_IN_KEY',     'iL:3TvF?%kU;?Kw(p$5iYIOXn/TY*XRUxNvfRI1qt7kxlt~F|Tkg`A.>xhUv#PD)' );
define( 'NONCE_KEY',         '4fa%;R+vP`lQ;<5uLtP^K/^807:#%JoG~3<[<iD_hWK{ctPw_j%#@KG$eeG~h3zT' );
define( 'AUTH_SALT',         't;n`:QGI>mb.*,BTF$_>H}pn#ZJBGay3X.Yp!lVc*_^b|P>g$XWNpO_xFtS6ge(O' );
define( 'SECURE_AUTH_SALT',  'c9oQsh~9}j])CU}zG:JalPzc@U/=wA[|w3i-:s@<6)W)g=$d+=r3ZaW3krp[Y5wC' );
define( 'LOGGED_IN_SALT',    'B$S_ev2_EETx3 jBlku])}s1.uyeK)[MvAb+|eOflz~cr$D<n[MQKD^8n#0C45j0' );
define( 'NONCE_SALT',        'JK1Et2tNReq1@yurGZdnwviNot~{sk4}m=,Ir dsh}ahMjq^$iln|Ti=#U1yXX4y' );
define( 'WP_CACHE_KEY_SALT', 'mYE1LBpHER.$#U:=,S^l4OgZ7iD&rYwPob2s@Wv+0UAmD^H_)|?p&s]+=2^yy%u,' );


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
