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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerceweb' );

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
define( 'AUTH_KEY',         'HxM_4=r89[1XQ>#gT}p 3C9|b_GL@nDyDyX%qja#P8=iU(rBu?-r`<jm:9es.aGn' );
define( 'SECURE_AUTH_KEY',  'eT7w>Y*7M%;#*xdg&ch[SX8/W2c,<fENR`9xxyv,s10RFH_WR:R]^3HLIdl[n$q ' );
define( 'LOGGED_IN_KEY',    'Dt7c}!re#rF=V-GCBO<#_1b *9TPlY/*4|2/@P a,{> LByM9cU0tg?}Jdum1: d' );
define( 'NONCE_KEY',        'p}5B.6qW}$-x_>C!yDZjk5<_Hy/.1CR-*voF~p3YslYsJb <5eNwU?:E=0e!=]8y' );
define( 'AUTH_SALT',        '_,N^:1MJ[.Z9vt9LPCAOkxT-aipG+kTaOSuFc4xi<F+^#{W2=:W=5]n.@-ExOVZG' );
define( 'SECURE_AUTH_SALT', '&xXHdn/0&mwrYX?{&LYmF>68qxz%cAVuh7P?Rskp:kRj%859#xe>Kcn:T+`m,4R:' );
define( 'LOGGED_IN_SALT',   '#yrlCVc4C|[pyha}=K&AO*3%6(+6.}<kaTa|op i_rLA3Nxe OBN!xP5dFvW6jsi' );
define( 'NONCE_SALT',       '`)e+cyE28-G[-qwI262/NnRT0)g<Zz{ItzDggoe6l8qgZSL|$3!C}/>>0 u0<NGf' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
