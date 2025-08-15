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
define( 'AUTH_KEY',          'c{;t,#oI^6?.m<zI3~<jfAZoS7f`x42]FX<I4/h<3wOrSH&QR(t5Do{|M9gDmWuR' );
define( 'SECURE_AUTH_KEY',   'XS_<7RzYfI:mjz@`Q{s|SDZC9{X!gMuoq2grrd7*tnUi4y</-nZ&l4qX%mol_FEo' );
define( 'LOGGED_IN_KEY',     'l5iXa%Rt`-8,;X!nC~{ w p$Dk%U7MfM^L^=#i9AJCss]FzM`f(Qh=*F~FwHYY4J' );
define( 'NONCE_KEY',         '</k0E-FCal5?5B<h+:x,3O0O<[Ge[x6V;;o)Z6f+C?gA<WKDqf!}G0<+F#S=lJQQ' );
define( 'AUTH_SALT',         'p8.zGQtA==9&^v>3/CD%@[n`0DHnT}nm!M:Xm_UH_meMlniFR$P[HM;]k#$B!(L:' );
define( 'SECURE_AUTH_SALT',  'kjQR]uk2Z>&wh,la))!]9dA-zB<7wJ14tUcv[^TO%<^eUqc7Qxjpfi#}cW*dJ%LD' );
define( 'LOGGED_IN_SALT',    'Ah8zjJ=|X0|p!$7)x=_@9S23HQ[[Vww?.`@W|0}rp,Da&BLBv}[ga/<VRw^_jLa ' );
define( 'NONCE_SALT',        '(QJ*HNuZrJ2HrkIb:U@[ 7m?4](=GRLG=MH(K$oAYfQl m}#*u[>0i[N2H)MbH/>' );
define( 'WP_CACHE_KEY_SALT', 'L3rcJ.:)XN;GW9;Tum]L>)cS~VP:U]pAOf#ojcE]zx4qkdFUd:dO&g.g@qYP;=w.' );


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
