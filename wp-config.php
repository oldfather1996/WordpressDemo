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

define('SAVEQUERIES',true);

define( 'DB_NAME', 'wordpressDemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'TooKwAvMmdUrLA1IcTpcWY67xtjmfScSSD8NL64aUeWwzfnhDA9GDOM8kDSL9PLQ' );
define( 'SECURE_AUTH_KEY',  'EYxRiwGYGlDNYE9KLpb2bGZHLi5XKq9Bw0ZNnhgAKMBtvAUneVACnbYEvWnNzOil' );
define( 'LOGGED_IN_KEY',    '7l9NAoovUUzjMxRtFTPOlAHw2vYPJU6utSRGmcTwIDogWeKXt93dl9ljVBkv6PHM' );
define( 'NONCE_KEY',        'YXenjY64713wWh0l1EXzITc6674H7xnBznRKPhQaDHhcskWfTdbNZcDfH3wcy7Lg' );
define( 'AUTH_SALT',        'AuwEB62FAQW2Bg3b0amdBaQcaZStl3G7zxKdMTrICkFQYNaqOFTLwYsGlRzRvJ7P' );
define( 'SECURE_AUTH_SALT', 'zS5h0x7jhzpxcRNzRx1CS1SNAM682ZhU8r3QaF1ZtoYMPuPmZXS3DStGfcpqLLlJ' );
define( 'LOGGED_IN_SALT',   '2HJXHIQ8N9M1mK4kl1WAmWJeuB2tuZSAQDocuws5nN6iVED7dZAqqeO1O2xQjEn4' );
define( 'NONCE_SALT',       'WYvGdAd66x3o5VNrAzb62ZqvTuFvL3v0L7NjKtNXiz1mhhADvL2WU2tE5kX80mdN' );

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
