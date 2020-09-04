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
define('AUTH_KEY',         'Hcx+lBrHU0R876q6c9MDadTxbmQ8bP5bLgLl+n6bsIqKeFKboK3qwjLrMBlxEmneoMaZ/djCrTP4AU4yCb109Q==');
define('SECURE_AUTH_KEY',  'k7NAVzv+vz7CXz1T+tyoDRAoaeYD8/l3ph1oClxmY34fhsw2+Og2JoxPLAc3ykZFS7gE/yrSF1gOaSphG8D2bQ==');
define('LOGGED_IN_KEY',    'wnk64AFbt/GuxXaJxaK3jnnGeCTcuwT9ObMoa/fFDdNEBS2YVF9F1+Ss+RGKo0oLb9fsnjhO4WrP0+E3dBZrZw==');
define('NONCE_KEY',        'g6u/WhwA9C+qoePxdtEfKmglCagKoAEpNPbUJc/lg1dKoRBdnjZsLgTHotK11oF8VtvCqqy6MyhQA8gctEgClg==');
define('AUTH_SALT',        'pgubdkoFS3y9DuVS8oGSU54Y756pVA3zCWV2ySjUDtHzCrvxvNht5G4ur2tV/SFvnMVrqNesvj+UZsou+O/FsQ==');
define('SECURE_AUTH_SALT', '4qoq2moGlOVn2BSZaPwlepagxDJR/sDnYDrmHiLKSjiRRqwLBZ4l4lwTj7CZ1mYagj3kjgEfsklIGfoKJ/IvhQ==');
define('LOGGED_IN_SALT',   'u2EdVrGBj1Oy/sTNq1UMQbRM0+ukwnY13K4iVdOwiNOSDdcN+xxxfm5gnOukrut+Rlgyk0C+/VBz5WS+XJuB8g==');
define('NONCE_SALT',       'Xvfv+dcOTe7HE0xpZV11jr58WNx/2za1MBJ6OUEhHjOEEPpRrFRCLALsldzkWza4IixEnBPs0h7SIy+Nm0plIg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
