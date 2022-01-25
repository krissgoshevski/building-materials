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
define( 'DB_NAME', 'wordpress_proekt' );

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
define( 'AUTH_KEY',         '4BhTAT1W>2kx))lRliQbec6{]+He`p4g?fI2j274X#JI[rpNpGF^N?WWeH^gI1&z' );
define( 'SECURE_AUTH_KEY',  'LBh8O8%.ddgf;[6+rq+DhESFx`t%C3rf.Na]pYKnWfeRwvi?4Nv^/nR:MXbC%uW)' );
define( 'LOGGED_IN_KEY',    ']pvV%b<dG[E$Sj0_N8^gQsH&fwk9wA]LR-7DrF-n:1;nQQaM2LFx]9[6in]B5Fbf' );
define( 'NONCE_KEY',        '.&Zf^@.oJckrY|o]veP`&LlV1qz)s-(*/Ylw,vpS;Eiw>M]4.:ddyI17/5VdNVGg' );
define( 'AUTH_SALT',        'l94,_C9rRkilmI[;hh5bTJgH*S@doTI^avtB9mU1)5~k?XE2m&a~nj[g!5><b.W8' );
define( 'SECURE_AUTH_SALT', '~;EQ8sJ);=y%|5VXQL-@qU9CFRo{;dixS8<QTwGxk_le9n}pa/6PH$;{]~ZT,P:=' );
define( 'LOGGED_IN_SALT',   '8zGsB)AN,cq3),etu<#h{h8Bt/r>)04SwO:)04Mf~/&V69Hm^<Rx<EIKx6Bd%8Ok' );
define( 'NONCE_SALT',       'D)^njnC:_4^*A7hPPO?OVk8(itO0J=`~}~xh28c^:fGYio^Yo[<%(yj<W9SKU{*/' );

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
