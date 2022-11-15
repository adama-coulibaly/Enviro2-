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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_32976248_w164' );

/** Database username */
define( 'DB_USER', '32976248_1' );

/** Database password */
define( 'DB_PASSWORD', 'Sp3J7)32K)' );

/** Database hostname */
define( 'DB_HOST', 'sql305.byetcluster.com' );

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
define( 'AUTH_KEY',         'dessweg3hx4si6o64h2kl8ytzokl5gwlll3kvn5rczlqh4xpnw8hewnmeksidb0i' );
define( 'SECURE_AUTH_KEY',  'wmbgp3rtj4d8xvqnjrjxexp2lxpkqvbosvquccjngutbooxgyxzkkzkppifo6bqp' );
define( 'LOGGED_IN_KEY',    's0hxoqfpcgfakwmsqhm29grym2kyodmxqazsnlkcqqkjqniofnjlmycipfdwd0dv' );
define( 'NONCE_KEY',        'qwpuhs6okjlzfic9fpiw0hk9a1kyhvtqm13bb0co4rodhnfgtugo1hemtyckvhl5' );
define( 'AUTH_SALT',        'l3efmfpuv6hgppoeol2eecooh3kocfzaclembvftv6ctvfxwzdrqw3k3vjfom6tk' );
define( 'SECURE_AUTH_SALT', '74t2qcq16piurriruqypdbykdraccreq3u7c2aumxkpkr0umneqg1z585fibbycn' );
define( 'LOGGED_IN_SALT',   'clc9i9xhmdaw9jyn6f1gctgxa9jubglo5pwuz4strdso31jnpsrwf8ehd30ivr9f' );
define( 'NONCE_SALT',       'qihnmalnlizjtlyr5cjcnwetwhbg5yhv001bxucoyv0wkeiznhkwcdmnwimfitnx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpme_';

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
