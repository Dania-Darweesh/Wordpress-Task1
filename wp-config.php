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
define( 'DB_NAME', 'db project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9wA.0om%6HUx(Jq4,D_<+fOz!RTK0Z{/255_FuafVS;;+|y#->!b:V%brpY+A.|G' );
define( 'SECURE_AUTH_KEY',  '{uJS^ ;>b0iXmIu6CluxTQVTnNjePX,!pP{.,nS0;gY?Dt+WyGh]BBAwS/:mc&<w' );
define( 'LOGGED_IN_KEY',    'M|WriKgN54#w.Htq&hw#fO$0|&&9Qt9cw$n&C*xE5J_^g4bL~Z*PoEEoIuWd0x2t' );
define( 'NONCE_KEY',        '-ejL@n51ui^kjBmdI-c.bt{-Xccl$KaLQ6G~Bg}-*`v!f3I:>uI~lpk*-PTBs=$6' );
define( 'AUTH_SALT',        '_>Q|^J]VY ER4Q4QTbnkQqnYe6N5$F0Z4g8jroS<519IBkwdLS+Y:T&Vj|f3*HoP' );
define( 'SECURE_AUTH_SALT', '`TE&7igPK@6zT_LELE)}l7pYw6M&A~XYS5.kk}lW//1&Wl!<_{]Knic7JawLll9x' );
define( 'LOGGED_IN_SALT',   'N)V^pe/*bpVkE*8s ;S0>>_?f6Oied:{t,VFU0obBe4Z0,]LClQ|_o/[|+XT<r*-' );
define( 'NONCE_SALT',       'pk?EmbyVzXncLR@?N!gUX@3/A]mH$9ckFrtDbr,8|#WNo[_ccZXZa[$GH6~D_ 9F' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
