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
define( 'DB_NAME', 'narayanavtar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yQkId@`R1~MA-FWFr/ksov=T/;YQ><Uw0Agf+uDOA6T$&0N~5m^*f=k #{.:G<H8' );
define( 'SECURE_AUTH_KEY',  'w?-VYsdebpmm|P[AP`x?q9P8`kxRlzHye{WuV69FEs=Rn2#D@e9~oCJ-I^0/*KOa' );
define( 'LOGGED_IN_KEY',    '124sVWV!oFA ?A`o/Z>rO{d8-N1K{8#drj9 .{ sZ @i=Zj=JIYyAD:#=ae&fAd ' );
define( 'NONCE_KEY',        '1BC6Bo8[DrQ5D92R`#gE*768rk >hTu^twPuq15Q0Wj]ug2Et}kNBnjnBmt(!fXI' );
define( 'AUTH_SALT',        'dJ#aH[o6O6LhzOAIkGS&E`Fg<{jux)#@9ZTD@}amFd|Z`54^{0!f4_pK-:`eJ`<x' );
define( 'SECURE_AUTH_SALT', '@#AR+>[E+_R>VLKs49f; kAN;G)fqh6oHCln (7iMM+e!k<ZNGS4WL(+-0/-2C<&' );
define( 'LOGGED_IN_SALT',   '^6:IWXakF-)V L;;rb`6;N^|`W}-6J9paq{zstO!cpu_D7[AIw|OZj37ELM99Z`4' );
define( 'NONCE_SALT',       '?ZV.9_%VJ[1T6R@%i]TP@PO1A:;3@9]en-%9M-S~#Q7?mibZWKgsmKdv~j/d5H2O' );

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
