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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T4zKw]B74>U8pW,k..BeG8L#yg6GJxlyf_`}oqf^2Hr1#S4!^,Mtl90%RQTauD9P' );
define( 'SECURE_AUTH_KEY',  '|KBEVI<*8]UXh}7A[5)iR V?cf84Q?OiMtYX5JspBj!F]Vj3]U%9rWTm;[o+OCHq' );
define( 'LOGGED_IN_KEY',    '%{sN&,H{HYOM>Y@K>PHw NYcUKTw:z^C$zCb.[ITcY{=F!&fn@gX64?l]u7m@3~Q' );
define( 'NONCE_KEY',        'qW*L,lPjlheK:%?j]ob-744K1XO8&{o.WgL_<%wE6J;Ia:B>;-EmGCt=ArHli:u?' );
define( 'AUTH_SALT',        '1E;HD/yvlDlZbOyI~f6C?@}@E5h85Y|EBRmvOuE//%YoWG#gw+YbYu*Bn:6#&mdh' );
define( 'SECURE_AUTH_SALT', 'Oxr/,WP4:z1;Mj9{VWrPa|T?]CkNjiusf.#g,P}|Z<+GWx;6,:7Wg8j4Rw+zV0>(' );
define( 'LOGGED_IN_SALT',   'w#gT=Mz y<X9Q*@&]_Os&c?ox{zDVF9zAqjr}o$a/OhwRga$2_/i0:8|]c<B(mFc' );
define( 'NONCE_SALT',       '4({450?gBN|)_/*d-P8De> ;fv@1pH|);zk4VqyF^ks^k82P-{ENQ*p6lUg}cIA[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
