<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wsarabia_WPQIW');

/** Database username */
define('DB_USER', 'wsarabia_WPQIW');

/** Database password */
define('DB_PASSWORD', 'rj_}F)x8s>O%*9m_8');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '88bc614a440da82bf50621295841b3abb9026cba7c930e1c6a8452b868a86e45');
define('SECURE_AUTH_KEY', 'ead1a4d408b4e6ba5ce51d41fd14e72a989b376e99af98f581d26dbecee2fda0');
define('LOGGED_IN_KEY', '72af3d93595e2ab37032eb6841d9d4b0944ccefbf9f6e26fbff6daad87fb6945');
define('NONCE_KEY', '2b97b81c739857e9a22c847bbc7f3f789df56da56ac680690ff8f39673336705');
define('AUTH_SALT', '3b71d92d9b89bfc1cc60ae9596c473eb327217f4602c3b3674374b2b18667639');
define('SECURE_AUTH_SALT', '599a952a22f1ba77d8199fd05840135d9e1469d70355ef4ab3a69d4bd84e65f6');
define('LOGGED_IN_SALT', 'dda1dcb04909ade7dfaf27aba2827d686b347fe2110b3555763fd9ec6482f0ea');
define('NONCE_SALT', '45417d499824925f590ae9b4130deda6568723e8d3d00195809f3934975bfd6d');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xfL_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
