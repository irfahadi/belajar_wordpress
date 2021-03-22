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
define( 'DB_NAME', 'belajar_wordpress' );

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
define( 'AUTH_KEY',         '~.l-Mu#,%_WWdNbXMx:W1!hH1!*og8C ~fO;wP.Oz9eOKSVIFg7LXcl;)+{p!,qX' );
define( 'SECURE_AUTH_KEY',  'SZWk]ED|u*=8*=GDC%H809rj@5isd$>x5h::%*|5cwRXvQ`7njF6T4B.{([D:kTg' );
define( 'LOGGED_IN_KEY',    '{pQ)sr<H>&JV;cjC2XMll0,!1CNk@I~9sjwxu3QxhsD,JMzi6Hf`^F8I=4PhJrb7' );
define( 'NONCE_KEY',        '<A2pqAc`:vh+pxJ~*Fj*;rDbN,&.wlm-Zw4y]L2h9bpb*ElNSu3/57R4Cg[?K];V' );
define( 'AUTH_SALT',        'IpzF]tN6RHzbsc_(=gY7ilt@~-f`JG;t@b3 %uV)hsV5,fyt&&te`Fb!r88ATgdT' );
define( 'SECURE_AUTH_SALT', 'K|`i0.P[[xK>HA<g(4||1/EQ(1o_5!N#ller,/%oOP.>lcy>]}wtX2a>5?L|$r{<' );
define( 'LOGGED_IN_SALT',   '#F;*V>#5_!LsIPte5!Y ;(U%j=L]sRyX~)d%^hbNrwl%80EaF_?r)nT=_,spqG/r' );
define( 'NONCE_SALT',       '5F?6/7MljQ(FfV>Sy9Z]eKc/d_9j{l8aYtPB<SZ,1iJf~6<%yn8$bpcZMNqz^Q?U' );

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
