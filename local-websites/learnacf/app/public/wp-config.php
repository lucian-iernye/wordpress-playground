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
define('AUTH_KEY',         'tZgVjl+lT9A+CtDUmNF9gTMiQ1LHmi8gLuRZeCn9l+rmBx3Ayq8EOVZfNPAelTNDAoXQ1tkRKbh7FFQ8st2e6g==');
define('SECURE_AUTH_KEY',  'eew0s6kMLd1+IQkpPTYCD4ad9SgTmL4fTaUi+KuZIxE+mILHgOK/3+GKf5yLTf1/Y3voS4eCRqpRbYnndfoAvg==');
define('LOGGED_IN_KEY',    '4ersliHfOImJZWb3R/hJ5AIEBUxlnMYW9lHpwbtA1ESbkLjaMMKmbR0Kz3pPBvCGCAsYpxUrbq75XMNQZ24jBA==');
define('NONCE_KEY',        'ZuVByX948048iMkorWekoqSs6tZVTEb4oQ/MSbQUc2bJAZmeUq7LFL1liFxC7qDIpQMrpy+P8ShBmXv50zMBxg==');
define('AUTH_SALT',        '1lpXLRztcfRPNRcZP5VXbwhPW4t7GkF1hIR97hf8QZhYT6kbrYB/y5rSj/2LQ09RMubQgv01an+MbyWtSJ0/Cw==');
define('SECURE_AUTH_SALT', '+h2UimvxzSPyqXfiAI9+yJ+k5fxSkWHKUYraQPyQhheTVsEtKWqxUK8nxqIDChtBpM6Wk1J6k8xSuyI6wtakvg==');
define('LOGGED_IN_SALT',   'M5q3otNDLE2WGWM1A7ymej1IJ1be14dSi+4rGhJ31gk2thN1DbsjwXyj5FmmT/+UPJhTXVWBfp7SQRff+vjUMQ==');
define('NONCE_SALT',       'o/BsZhE2wyu296x7fWjpSUM5DDr3QxuXnu61uUoWHqYvdJ4T9DhjK3HrpGs2ChrbPonbcoXTSDTK/QUEVZtVsg==');

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
