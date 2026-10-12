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
define( 'AUTH_KEY',          'NC pNW]2~el<|VT}MR/JjYA.*Zdq*.ns@2Nt,KY[H4,{MO.!6r%-2Z=@4S^O}^%8' );
define( 'SECURE_AUTH_KEY',   '4=9b?T8M)^63s:&h%Wh%FLOOZh7&_*9XpgSj9E~wSbM1@ypL9G?jPI@+f/:g=;}x' );
define( 'LOGGED_IN_KEY',     '!he F*B<OG2Aj O4c$E.]nS]_E|sT`5t0d6>EP|,;n^]O}mCOz;K=B2D3c#1(}vH' );
define( 'NONCE_KEY',         'Yms./dJ/4M@W*Ee=`MTm>$lc,;AOwLpJvI:{s5l3u|GxNRK*0C8EHZu1pW3tp(=d' );
define( 'AUTH_SALT',         '#Lc,!#UcM9oQur^tTV4BM4x-4&IG~uiF:i77sZd9>=)S.DLwtU1|}_fLpd:_-=}{' );
define( 'SECURE_AUTH_SALT',  '58=<dyTt|B.I+l;)m+p;~l$wG.>~vaD`a+1to/(sL9klvz<IG%EYe>KZy0a WQ>#' );
define( 'LOGGED_IN_SALT',    'Ges2@<a_#L#iiC4PwuIe!z1}E^B>9Nf0MkFRt^$.UFva?2ev&bSYy@dDQ8Crn0Ii' );
define( 'NONCE_SALT',        '$C4l8sM9cp0/@2zopSA oOfLa/]^/IQmUu-Rj*LMg(-.8JR[{lL%:Pp4x|EhL.&1' );
define( 'WP_CACHE_KEY_SALT', 'yQ%tb[:qe_.NE.%kaaMjP?Zl1dHbGx*}2&}|@k?sw$z7*f5wWpm%h<&0gRmk? yv' );


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
