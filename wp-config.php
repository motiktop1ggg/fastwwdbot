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
define( 'DB_USER', 'u3354739_default' );

/** Database password */
define( 'DB_PASSWORD', '39tZd7ncSv7Yu2lI' );

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
define( 'AUTH_KEY',         '|Q;4:{3?0r_y&N(pIo0n+5[r3$=f_GXp#[=7CtuDHw1pXIdj2y&CkQUk@f_[WFPI' );
define( 'SECURE_AUTH_KEY',  'w2lDNuC$GK?:)D+.7Bt(s9|1$d#A`gyC[#cBD0YOogn;rqz3/r(0MzYbK<Xt:B?y' );
define( 'LOGGED_IN_KEY',    ',@[{r42Ax(-lI`0_nz9M)AQlG:,kO8)&|wZfySsh=pSyQ=PZB-O4XpW:>TN#Iz8S' );
define( 'NONCE_KEY',        '1`k6`l)#rQs=2w4?;]S[nEEAC|2ltoQ8>7/q_`>=V~^{l@Zh$}JRE_J.^HrxG6I^' );
define( 'AUTH_SALT',        '$8pZ.w]>$/f=1PSX.FlY/]xElm-ZQh^vB.NW2T,,*J~B`fbK`2S/^6}]5x,y19SI' );
define( 'SECURE_AUTH_SALT', 'F/Zv:*496M@s%a?KG1`owa):FQBuHsd/|uj*ta0]R0Tydw>+0U..2;`M8]P]O_Qb' );
define( 'LOGGED_IN_SALT',   'Z/A}e~}z-MIN>{.{.X=SMhH&)Pq&Sc!J@$PwVx,=QUC}2juXt`cmCRytt?- hW)?' );
define( 'NONCE_SALT',       '*NEPsxR7->3X!!vN)WuE;N%3.Ji#mDH|>,~,OCiNS9(>-6/4[2dh)w7->8BzKN0Y' );

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