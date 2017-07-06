<?php

define('WP_HOME', "http://wordpress.dev");
define('WP_SITEURL', WP_HOME);

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8a8ca6b2544f818cec61a620f7174b3b331e9f53');
define('SECURE_AUTH_KEY',  'e60e1b96c1232f7692d10a28d9c1764e248bf6e9');
define('LOGGED_IN_KEY',    '4847e8ee49fa0208aaf9931666478f549d96fc1e');
define('NONCE_KEY',        '7898f5d96e0832a049d9a3f3d807f5dd7425f3ac');
define('AUTH_SALT',        '88e16353138ef05fa062cc53bc68bd065e9d5f42');
define('SECURE_AUTH_SALT', '5477f74491dd8011428d14ecafaaad7ecc8b9c09');
define('LOGGED_IN_SALT',   'e9424ab5535d5bd281fda26792db6947a18f0195');
define('NONCE_SALT',       'd0bac1530e7b6bd22ec2e5cfc4d563ea9a23ba85');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
if(isset($_GET['dbg']))
{
    error_reporting(E_ALL);
    define('WP_DEBUG', true);
    ini_set("display_errors", 1);
}
else
{
    error_reporting(0);
    define('WP_DEBUG', false);
    ini_set("display_errors", 0);
}

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/**
 * Custom Settings
 */
define('DISABLE_WP_CRON', false);
define('DISALLOW_FILE_EDIT', true);
/**
 *  ContactForm7 - Controlling Behavior by Setting Constants
 */
define ('WPCF7_AUTOP', false);
define ('WPCF7_LOAD_CSS', false);
define ('WPCF7_USE_PIPE', false);

//define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

