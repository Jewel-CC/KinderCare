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
define('AUTH_KEY',         '/7QKrIdtytUYMEZhviFLk7UnG2ychGzAwDkARmQzp9382U3K6+XIFAHHiKn1BfOp84T49AxJv/agLYB6S8W26w==');
define('SECURE_AUTH_KEY',  '9jOjMv/+h+JUHsL/grweeoGNL/DuCr28dI1+FYtuZVdSyNzX6vE/nXT0gBMtzXOw/akQdxPrMN7aV6gLGMQAug==');
define('LOGGED_IN_KEY',    'ISBIEHJQKQ+0m41plfmmtpIbV844AmvedvJwa0mBf5BaZFpF0vjvFPEiVD7AlCxiiypXkUxkvc0PWmjf95NPxg==');
define('NONCE_KEY',        'bzU542Nyd3HjLy7x9SA3sOEc2cpoeH4FjAQS5IPBXJH1hGVIMAJ7JesIl1BzWcUUdtOhb/whkzpElaNXQG/95g==');
define('AUTH_SALT',        'Igy7r6PJh/mdDr1UVqCWbF0JyOaBS0KjZjSGyLyKgJPsyKW/Um9HKaAVI7ZfPJR19pL8tex3+bfM2QBTYXYQEA==');
define('SECURE_AUTH_SALT', 'vjUmvxdTCw5asrMdXdl/rQHBPrEeD1FtQRcmGLZpO4bIZRsP6GNuXQgpgDhxXuoVLd3bPURrNqi41nxQHeRQmw==');
define('LOGGED_IN_SALT',   'B+vcPlRK3rHxk4daoxWTb4HqdknCXIsU0NqaX6SoyIqaDDrJZdYCp4gCS7QHMFPFPh00oLB31BcJQzkNIHt0zg==');
define('NONCE_SALT',       'EDsdh0ZpYeBQpFw9+NLySyAcAvMK+LtJBgTBW4BTflDuSoj69TH9jWArIys6xlQvppCrzPMNECgKPbGsTXXFUQ==');

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
