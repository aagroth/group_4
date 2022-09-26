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
define( 'DB_NAME', 'fyrklovern-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'i18pFsf*Cu5+`hpR eeZXzbse47mb)$0YVQ~SM1:wO4nyfGB^D0P B?YD:CGuX0m' );
define( 'SECURE_AUTH_KEY',  'gnap,Sk`E%UOY,LfmT0H6gZ6iStq{+a$cV?_ImJNyWB<Qb&tBO-=/Y}#v_oix>bV' );
define( 'LOGGED_IN_KEY',    'Y59[*uK^!wR&8{{#54Vopmlh&pJ-!0}O)1s;]GsHf$m1=EtBMZC^.RKeV_0<5!Q!' );
define( 'NONCE_KEY',        ']Xl{fE8w+5s$|YGXdu%l/ayzK/w:rlF5p1Qh[16yz*x5M^w#R;Xzn<dmUumYE-@;' );
define( 'AUTH_SALT',        'Re.{m t5eYRi&5mF& t[5/AB5gFgbAEGJd>#XN!4[eY|,YoVP*V,|s2Ng%a&;{`Z' );
define( 'SECURE_AUTH_SALT', 'Uw%HD~np$h,UzUdY>T3]=#vLDL$7r@nQ{z(s9E=rU?(p8&k{4Sb*xDt MRCH6)Jj' );
define( 'LOGGED_IN_SALT',   'uisiiv9MT]Ir1_@u4A|uszO1b 3X7=WAA82]qQTz$D/c~Nah$HB+I;1K9H?cMee1' );
define( 'NONCE_SALT',       '4*I[HGG{jdwG_JR?-!r)EREY*3jyshNrq-v+7H@]XG*i1dAb(c4#lk$+V^b8AsSn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gru4_';

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
