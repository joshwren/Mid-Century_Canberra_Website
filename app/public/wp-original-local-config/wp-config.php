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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'qzyvNlkLu1LGblMzLSKdMEtH/j5rB+ov+KThcSlGlbSAFSkinX5RQbCXkLNle+gOzPQNCSgS8VBx7W7HIe/6vQ==');
define('SECURE_AUTH_KEY',  'sP3V3DMkhlmoW3KFrL+0LNNXFZZseTC/GqIp0QTnMJ2CXomwBp+twGT44KpHcqv9UYtVExzThNwN0D2YMizkrg==');
define('LOGGED_IN_KEY',    '/FnwTavsSiCYqaxyxk0Wupocy3X6fbneqjMTXAEmHr8Feq3PeuPHphwGiKoBOyfnrb5L0Xyyc2GjZPpvNLumcg==');
define('NONCE_KEY',        '4Ziw+Dpn4ZRUv3lSsiptxeG1+bV+UonDqHgRs3FC7Rnm32/icN1bwsmVyS4DheQMKAEU2qAVFqmub3NJqjO4IA==');
define('AUTH_SALT',        'wl1osVXmDHLiKOKsCNhLv+YvCdGIC/oSmCf4CoRvsag4/+0ucsO5/cXD7vQft5P8B85ZBl/4O9Rg3d2/4tQWWQ==');
define('SECURE_AUTH_SALT', 'naol5m1Zm/hW7Dh9SPbCtwKerV+7yl6w/MVUuDe2uHEmkKA90yuFGRou6xa4NpjJ4drMoLrSdSSzN+RMqA6qlw==');
define('LOGGED_IN_SALT',   'hM+n0OAklAlksPEnoLKw+jmZbb25W7tvXHgOkFxVRq6y2qkBJYLjao6nRfqKNfknpiwPN8sfO/RNYkXT8eHOrA==');
define('NONCE_SALT',       'yXSrltJK2M5GCMRFebOi1uuJoxkHgh8tbI0hwptZsJdZHKodR3oQq4/gAjhxyLFrP2APX3kSfJgOH53HhZvdDw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
