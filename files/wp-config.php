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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
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
define( 'AUTH_KEY',         '<{MI?O,#{Q4zF>=n:7U(XWfkT<jZdO..]A0l5u=V4b>~Gq0$o9aA2a(Ir2DnD>5@' );
define( 'SECURE_AUTH_KEY',  '}NWpBb0?<=uldx$u$)$__F%L-Hq=niLalBn-dUG<EBNHiFE!q{AcDC<P(qBzW=pc' );
define( 'LOGGED_IN_KEY',    ', %~p$C7C+sjcx.t!Gv-yqLnCY;d$K(P*x`zRz-B.nmVJe^bpgnLhm&:4QJp`8o;' );
define( 'NONCE_KEY',        'Z(XnY{~Cu7*M&c4=FjS=mtcWPkhnDUc|ueO-aypwLA!|]jC)TxNqqC^L<vcu^C`h' );
define( 'AUTH_SALT',        '-He&)|:l:9<pP83^kEXu10YYu[RDxV1.[I7Sg-C;{$}sNv%(kY7M5Dc[(JJk8RPW' );
define( 'SECURE_AUTH_SALT', '{juU,VdNk4nDF<1@:vr25dTL^$vW6}Oj)m]hWXyRo/1/m.5/6V$Ky,AMhy>,t[CE' );
define( 'LOGGED_IN_SALT',   '!k)i1DrLS #{DR),5}VwL&qosji+<QsW|.H4U)e6<WB1M9/}dE@=TR.9{R,&q{uf' );
define( 'NONCE_SALT',       '=%{~f@J$7{fn% `M !#$&S*!|HWOzSZxW}0et<Lm5p+]/|MN*V; J@.KdcINkt%{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
