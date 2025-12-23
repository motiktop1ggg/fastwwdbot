<?php
/**
 * The base configuration for WordPress
 *
 * This file has been configured for a local XAMPP/MAMP environment.
 * Copy this as "wp-config.php" in the root folder of your WordPress installation.
 */

// ** Database settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u3354739_fastwwd' );

/** Database username */
define( 'DB_USER', 'u3354739_fastwwd');

/** Database password */
define( 'DB_PASSWORD', '123123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * You can generate your own at https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** For developers: WordPress debugging mode. */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';