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
define('DB_NAME', 'ibni-yamine-chabane_wordpress_8');

/** MySQL database username */
define('DB_USER', 'wordpress_1a');

/** MySQL database password */
define('DB_PASSWORD', 'K8io#6KUg9');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '6@9HKN!bQkC)WuBdeBz)Ta9CVtmC8Rgly*WwgJ9KK9%S*&WFA#lOOj*tS4O9TT0w');
define('SECURE_AUTH_KEY',  'H@#%hxazFsY@qAyT38HVW^4oX5tnBt%68xNyC1unAzc&EGJoN0Ke%^I!TLte*tiU');
define('LOGGED_IN_KEY',    'ZCWBBQor90#1vfVfkGvMbn9)7EB8FMRhFR!H55EseEgWeMkRASr3#C0hGH1!r!Wb');
define('NONCE_KEY',        'Oab3%zyAYXWq(w)T^zL&%pcX@cK4Mqq2UTfA%mX50sVklU*f!01XZ^Bz6aWT7x!3');
define('AUTH_SALT',        'WoJkjLkVJZRciqiUxzT)rtj5)Spnpq16q38c2mM0M&sb*6jfAMN5D)sX3DHh*T(t');
define('SECURE_AUTH_SALT', '4rZvuivWRKc54ZwdRMz5heFNqHtzkFdDFlh!zmyIaU&FcAqDbzsY(HZRuZwV!D)4');
define('LOGGED_IN_SALT',   'w@3hr5OTRqt*xsAU4Nn#7w3xSlJ6an3IA(*qQ@Lyvat8m0ag*#MXHoCT@HuTmBt@');
define('NONCE_SALT',       'jhM386x5C#yumtnp18L6!zxs*dvWMM%Amzc(OOO0FL*54#&pr)&p2v76%GcE^bXL');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'geDdV5ffz_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
