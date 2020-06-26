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
define( 'DB_NAME', 'robotica' );

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
define( 'AUTH_KEY',         '[R0u.>E*]!L4S6XE#xaC!#iDwr/_P,A%{`0`1qN6vW)JPN}UWj*>m:1X/P$?t1=#' );
define( 'SECURE_AUTH_KEY',  '5~fwINwuu,%be|dV9]@xw.6VA=M}zTk4iBB+|nc:6W^e5L<)lDr4Vf@OiM)Bt><I' );
define( 'LOGGED_IN_KEY',    '?dG6miG|{9t.WzYazaw#32=A5QtR@dP.xXrL%)0idA>^?N$^Mgx@c*ar!,I87u16' );
define( 'NONCE_KEY',        'hRf!K@!{B2/N=`;0+(J{|%d<o5CS`;Ynq0j:Q5%LAfrh8#}{L|.NZ?a=a$x>y@2g' );
define( 'AUTH_SALT',        'd -S-_m{Qs3bw}(/9tQ)/8K<-RMd!(rH6*A1jMZ:Ah!%]-o -C+b^}-Qq~ZB(({M' );
define( 'SECURE_AUTH_SALT', 'bt08:o%Vybf-~`@EF`Pytp`n)7C?}SSgZk4^65fO_ZOKEhyY1=-G!3kceZKAW|mZ' );
define( 'LOGGED_IN_SALT',   'IT>JVz1HIPXWfpyo|ZdRY-,Z(A.+:$Z 6Vmx(<LC[Zc$Y/Un8T)NNYx=phcBST!}' );
define( 'NONCE_SALT',       '~w1;RLSd;2s$YalFqKU^3K8JpJX=SQ-+k^(ORgAhp3Kf3<4NH}%m1/`sxzxM&L!)' );

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
