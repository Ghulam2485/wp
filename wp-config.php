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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wolfizsolutions_24' );

/** Database username */
define( 'DB_USER', 'wolfizsolutions_24' );

/** Database password */
define( 'DB_PASSWORD', '3c.I9[S!9pe-w37!' );

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
define( 'AUTH_KEY',         'vgjcxlhjllyuhz4m4wn9iqq1sxzk7acjzla8dkywewfsdpsj3j1oqxacjsv2ajbl' );
define( 'SECURE_AUTH_KEY',  'gdnbzem6x46jgchsaorcei8pfgvb9pfb987578ucaelnvzrwym9sanrp0pacqccg' );
define( 'LOGGED_IN_KEY',    'bcyd7aeovt6dyestkg04iwwgmdfzfoh3dwjzrbkxig2sifka967omt4shrhiztbv' );
define( 'NONCE_KEY',        'yhlab6njkjvcsfxndaebjl1ryb05ojh4guey7kqtponmrqnsuigvftywzmyz1mkd' );
define( 'AUTH_SALT',        'qn8mqwj0j4jwlysbe6za1ndfgq6i84gfu6x03auxltwgufkoite5uzhf9qgp5p3w' );
define( 'SECURE_AUTH_SALT', '2ry2mixifxjdbohkyyakosro75zoxzwvzudicgqqis7lsyjhg45czhky4risyyq6' );
define( 'LOGGED_IN_SALT',   'zpf54ljjedckaukajjtivpbblukdm7vztqpdk9bo8jmkewdlmafjccnlue4vjbey' );
define( 'NONCE_SALT',       '490lhhn8zhmd4nzqvetyjegs2nuif5bc7pclifbigexcisxbfbhbkkk42oxp8mx7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwa_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
