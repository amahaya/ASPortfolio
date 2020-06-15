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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WVNN/6SHPrCfpA8pdozsy/P/MeVFJKdWrMAh1AqtwphljgHse1vKE1wOIDJ79mGYOAkhT5FUbBQPO74sH8kMMw==');
define('SECURE_AUTH_KEY',  'jrklCGpikHNxJV00kR2Fg1NbLisz7pgTEUd04QGyqVaz+S7k+NQtSVY4qkLxhFIsOzhtmc7DHHXTRCDPHFKt8A==');
define('LOGGED_IN_KEY',    'VlxIj92fXkcNBq6qf0IKdyRscZyJo9RhNein27M0axGHqrz9gve56jsMUgZBzvqPetC2aWaXT21auIB2GWQQhg==');
define('NONCE_KEY',        'tzU3Yh3vNO2Geq6eIVWLfrrU5jciRYt8ulm265ztlKBf0yRKu/525mfOewZbRsY02sopvNW/2MBLBpp5/o7bug==');
define('AUTH_SALT',        'Pwi7yfR3tlj0kML7abAFa6CLK267UnHlgBP6ChYd6nBDlULff8Dp/WXFW8q/pNvmccpKiNVgV1tiXm41TAp4zA==');
define('SECURE_AUTH_SALT', 'BFatpQjg3pPl4n8q7ddwTykBFzOelJkAJa0vodqCyCpnofTE0Pnt40pTnkjusfLZ94w5pr8DcQy8A+htgN9fCA==');
define('LOGGED_IN_SALT',   'hTUQzHzNLeYR5kzXWGkW3GKpF+ocW1yLHiwUdxl87ZDLLSgHAP5B9LDHndrCmm/4U+KS98g7XgKTPhfo+Hlz4A==');
define('NONCE_SALT',       'ttroHCfCnExI5MDBAQZDjnjOI1jL2W9EI8fujWrfLPfEXJu/zkSoSGe85n+Y4YyLg20FgjQZf0HyuX9jp62VSw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'localhost:10003' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
