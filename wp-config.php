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
define( 'DB_NAME', 'missy' );

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
define( 'AUTH_KEY',         ' mO_(v|?`5v$SR6NE;]>v{_}rX!GtiqcGBL8Nw~f~*2,/0WdbYAS#nl2bz*Dq]2)' );
define( 'SECURE_AUTH_KEY',  'Ss n5^|!^~AZ<DoL_f(KO/!_rQk W<0v`T7}{KiIGkc_9Ue7]b=I:C%lXVYhU3OK' );
define( 'LOGGED_IN_KEY',    'd_#EHOI1#{[FsJo[FWpNBsH$VCp2nqpo`LVg-rJrip~&~^,zW7]aEzQ@<Wi{qbT6' );
define( 'NONCE_KEY',        ' %l9X/:f_)+r&~sHsD:|76oWo:u=tL &wB8d4{xGk&#_HQ&v;L5Ft|f_IJmS7gq@' );
define( 'AUTH_SALT',        '*Xk7w:wAslpjV ON@3qLVGIPA3lvo[36ou<&q#z{*Ak1d=aljj?k&*r,bdsMF#~<' );
define( 'SECURE_AUTH_SALT', 'C==]t+AE/x`ZfAvfU~gAHjL+l`g4^=IS=p6_%]*6PUdHvaDKPatO1u~Eo0k-A:y*' );
define( 'LOGGED_IN_SALT',   'M%gVos.<nBr-kG@K!{(S{Vl*@D7PVG<)>{>6Ctel##LAR7BJ-;T9*yfe2qID%kmv' );
define( 'NONCE_SALT',       'R`5O}TGXMLx!<N|<PP|OU?~9aW.{Ya}d69.Uw<.sb!c?<DG@Bd%N/nx%<( Tkp@{' );

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
